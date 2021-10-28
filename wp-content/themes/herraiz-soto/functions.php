<?php

add_action( 'wp_enqueue_scripts', 'insert_assets' );
function insert_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_register_script('lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js');   
    wp_enqueue_script('lottie');
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', [], '', true);   
    wp_enqueue_script('main');

}

add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  $pagetitle = get_the_title($post_id);
  if($pagetitle == 'Home'){
    remove_post_type_support('page', 'editor');
  }
}

/* Add nav menu */
function wpb_menu_principal() {
    register_nav_menu('menu-principal',__( 'Menu Principal' ));
  }
  add_action( 'init', 'wpb_menu_principal' );