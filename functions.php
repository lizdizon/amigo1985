<?php
	// Store all of your php functions here
	

    if ( function_exists('register_sidebar') )
        register_sidebar( array(
        'before_widget' => '<div class="widget_box">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
?>