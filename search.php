<?php get_header(); ?>

<!-- not being used currently -->
<div class="wrapper">

	<div class="content">

			<div class="secondary-heading-container">
				<h1>Search Results for: <?php echo get_search_query(); ?></h1>
				<?php echo get_the_post_thumbnail(get_option( 'page_for_posts' ), 'full'); ?>
			</div>
			
			<?php get_template_part( 'loop', 'search' ); ?>

	</div> <!-- /.content -->

</div>

<?php get_footer(); ?>
