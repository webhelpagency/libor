<?php
function register_my_widgets(){
    register_sidebar( array(
        'name' => "footer-first-column",
        'id' => 'footer-column-1',
        'description' => 'Віджети першої колонки футеру',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ) );
    register_sidebar( array(
        'name' => "footer-second-column",
        'id' => 'footer-column-2',
        'description' => 'Віджети другої колонки футеру',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ) );
}
add_action( 'widgets_init', 'register_my_widgets' );