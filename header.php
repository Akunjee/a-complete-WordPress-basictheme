<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php wp_head(); ?>
</head>
    
<body <?php body_class(); ?>>
    <!-- <ul id="page">
        <li class="topNaviagationLink"><a href="index.html">Home</a></li>
        <li class="topNaviagationLink"><a href="index.html">About</a></li>
        <li class="topNaviagationLink"><a href="index.html">Portfolio</a></li>
        <li class="topNaviagationLink"><a href="index.html">Services</a></li>
	    <li class="topNaviagationLink"><a href="index.html">Contact</a></li>
	</ul> -->

    <?php
        wp_nav_menu(array(
            'theme_location'    => 'main-menu',
            'menu_id'   => 'page',
            'walker'    => new amadermenu()

        ));
    ?>