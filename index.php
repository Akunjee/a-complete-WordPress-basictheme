<?php get_header(); ?>
    <div id="mainPicture">
    	<div class="picture" style="background-image:url('<?php header_image(); ?>');">
        	<div id="headerTitle"><?php bloginfo('name'); ?></div>
            <div id="headerSubtext"><?php bloginfo('description'); ?></div>
        </div>
    </div>
<?php
    echo get_template_part('template-parts/content'); 
 ?>
<?php get_footer(); ?>