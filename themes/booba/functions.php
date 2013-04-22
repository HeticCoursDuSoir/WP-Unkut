<?php

//active l'option "Image a la une"

add_theme_support('post-thumbnails');

//on defini des tailles d'image a la une

add_image_size( 'single', 572, 327, true );

//On instancie les menus

register_nav_menu( 'main-nav', 'Main Nav' );
register_nav_menu( 'footer-nav', 'Footer Nav' );

//on instancie et paramètre la sidebar

register_sidebar(array(
  'name' => 'main-sidebar',
  'id' => 'main-sidebar',
  'description' => 'Barre Latérale acceuillant des widgets',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div>',
  'before_title' => '<span class="widget-title">',
  'after_title' => '</span>'
));


//on peux aussi créé des fonctions personnalisées

function tvoisJveuxDire(){
	echo "t'vois j'veux dire ou quoi ?";
}