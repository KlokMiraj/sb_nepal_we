<?php

function resources_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('assets/main_style_sheet.css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'resources_assets');
?>

<?php

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));
?>

<?php
//function page_ancestor_return

function get_top_ancestor_id(){
    global $post;
   
    if(wp_get_post_parent_id($post->ID)!=0){
        
        
    }
    return end(wp_get_post_parent_id($post->ID));
}
    

?>