<?php
/*
	Template Name: Left Sidebar
*/

	get_header(); ?>
<style>
	.content-area{
		border-left: 1px solid #CCC;
		box-sizing: border-box;
	}
</style>
 <div class="contentBox">
    <div class="innerBox">
    	<div class="sidebar-area">
    		<?php dynamic_sidebar('left-side'); ?>
    	</div>
		<div class="content-area">
			<?php while(have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>

				<p><?php the_content(); ?></p>

			<?php endwhile; ?>
		</div>	
	</div>
</div>

<?php get_footer(); ?>