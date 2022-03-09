<?php
/*
	Template Name: Right Sidebar
*/

	get_header(); ?>
<style>
	.content-area{
		border-right: 1px solid #CCC;
		box-sizing: border-box;
	}
</style>
 <div class="contentBox">
    <div class="innerBox">
		<div class="content-area">
			<?php while(have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>

				<p><?php the_content(); ?></p>

			<?php endwhile; ?>
		</div>
		<div class="sidebar-area">
			<?php echo dynamic_sidebar('right-side'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>