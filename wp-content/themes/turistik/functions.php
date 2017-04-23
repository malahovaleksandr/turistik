<?php
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
function get_thumbnail() {
    $thumbnail=get_the_post_thumbnail_url();
    if (!$thumbnail) {
        return '/img/post_thumb/thumb_1.jpg';
    } else {
        return $thumbnail;
    }
}
function get_imageArrival() {
    $image = get_field('image');
    if (!$image) {
        return '/img/post_thumb/thumb_1.jpg';
    } else {
        return $image['sizes']['thumbnail'];
    }
}
function get_image_prewPost($id,$size = 'post-thumbnail'){
    $thumbnail=get_the_post_thumbnail_url($id,$size);
    if (!$thumbnail) {
        return '/img/post_thumb/thumb_1.jpg';
    } else {
        return $thumbnail;
    }
}
   

