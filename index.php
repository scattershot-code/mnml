<?php get_header(); ?> <!-- calls header.php -->

	<div id="content">
	<!-- the loop -->
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
		
		<h2><a href="/"><?php bloginfo('name'); ?></a> | <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><strong><?php the_title(); ?></strong></a></h2>
		
			<div class="entry">
			<?php the_content('Read more &raquo;'); ?>
			</div>
		
		</div>
		
	<?php endwhile; ?>
	
	<?php else : ?>
	
		<h2 class="centre">Not Found</h2>
		<p class="centre">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>
	
	<h2>all posts</h2>
	
	
		
	
	</div>

<?php get_footer(); ?> <!-- calls footer.php -->