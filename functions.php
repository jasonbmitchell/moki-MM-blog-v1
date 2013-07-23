<?php
/*-----------------------------------------------------------------------------------*/
/* Run Theme Blvd Framework
/* 
/* Below is the file needed to load the parent theme and theme framework. 
/* It's included with require_once(). 
/*
/* If you're creating a child theme, this line needs to be at the top of your 
/* child theme's functions.php. By doing this you're overriding the file being 
/* included here.
/*-----------------------------------------------------------------------------------*/

require_once ( get_template_directory() . '/framework/themeblvd.php' );


if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'moki-search',
        'before_widget' => '<div id="moki-search">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
));
}

if (class_exists('MultiPostThumbnails')) {
            $types = array('post', 'page', 'my_post_type');
            foreach($types as $type) {
                new MultiPostThumbnails(array(
                    'label' => 'Secondary Image',
                    'id' => 'secondary-image',
                    'post_type' => $type
                    )
                );
            }
        }




