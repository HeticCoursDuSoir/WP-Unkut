<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <title></title>
        <link rel="stylesheet" media="all" href="<?php bloginfo("template_url"); ?>/style.css" />
        <meta name="description" content="<?php bloginfo("description"); ?>" />
        <!--[if lt IE 9]>
                <script src="includes/html5ie.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="bg-header"></div>
		<div id="wrapper">
            <header>
                <a id="logo" href="<?php bloginfo('url'); ?>"></a>
                <?php wp_nav_menu(array('theme_location' => 'main-nav', 'container_class' => 'menu-class')); ?>
               <!--  <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Biographie</a></li>
                    <li><a href="">Punchlines</a></li>
                    <li><a href="">Contact</a></li>
                </ul> -->
                <div class="clear"></div>
            </header>