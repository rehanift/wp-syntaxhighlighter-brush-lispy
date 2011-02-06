<?php
/*
Plugin Name: SyntaxHighlighter Evolved: Lisp Brush
Description: Adds support for Lisp-y languages to the SyntaxHighlighter Evolved plugin.
Author: Rehan Iftikhar
Version: 0.2
Author URI: http://anarrayofbytes.com/
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_lispbrush_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_lispbrush_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_lispbrush_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-lisp', plugins_url( 'shBrushLisp.js', __FILE__ ), array('syntaxhighlighter-core'), '0.2' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_lispbrush_addlang( $brushes ) {
    $brushes['lisp'] = 'lisp';
    $brushes['clisp'] = 'lisp';
    $brushes['elisp'] = 'lisp';
    $brushes['emacs-lisp'] = 'lisp';
    $brushes['clojure'] = 'lisp';
    $brushes['scheme'] = 'lisp';
 
    return $brushes;
}
 
?>