<?php

namespace Roots\Sage\Init;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
        'sobre-topo' => 'Menu "Sobre" do topo das páginas',
        'sobre-footer' => 'Menu "Sobre" do rodapé das páginas',

        'software-topo' => 'Menu "Software" do topo das páginas',
        'software-footer' => 'Menu "Software" do rodapé das páginas',
        'software-home' => 'Botões da seção "Software" da home',

        'cursos-topo' => 'Menu "Cursos" do topo das páginas',
        'cursos-footer' => 'Menu "Cursos" do rodapé das páginas',
        'cursos-home' => 'Botões da seção "Cursos" da home',

        'rede-topo' => 'Menu "Rede" do topo das páginas',
        'rede-footer' => 'Menu "Rede" do rodapé das páginas',
        'rede-home' => 'Botões da seção "Rede" da home',

        'geral-topo' => 'Header Global',
    ]);


  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style(Assets\asset_path('styles/editor-style.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="sidebar-title">',
    'after_title'   => '</h2>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s col-md-2">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => 'Creative Commons PT',
    'id'            => 'creative-commons-pt',
    'before_widget' => '',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => 'Creative Commons EN',
    'id'            => 'creative-commons-en',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => 'Creative Commons ES',
    'id'            => 'creative-commons-es',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');
