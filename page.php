<?php get_header(); ?> <!-- calls header.php -->

	<div id="content">
	
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><a href="/"><?php bloginfo('name'); ?></a> | <strong><?php the_title(); ?></strong></h2>
	
			<div class="entry">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							
			</div>
		</div>
		
			<?php endwhile; endif; ?>
			
		<small><?php edit_post_link('edit page', '<p>', '</p>'); ?></small>
	</div>
<?php get_footer(); ?> <!-- calls footer.php -->