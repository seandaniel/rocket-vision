<form class="taxonomy" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <?php wp_dropdown_categories(); ?>
    <input class="button" type="submit" name="submit" value="Go"/>
</form>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">No Articles Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
		</section>
	</article>

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>
	<div class="blog-container">
    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_post_thumbnail('full'); ?>
          <div class="article-content">
            <h3><?php the_title(); ?><h3>
            <h4><?php echo get_the_author() . " - " . get_the_date(); ?></h4>
            <p><?php echo wp_trim_words(get_the_content(), 45); ?></p>
            <a class="button" href="<?php the_permalink(); ?>">Read More</a>
          </div>
          
        </article>

		<?php endwhile;?>
  </div>


<?php // Display navigation to next/previous pages when applicable ?>
<div class="entries-container">
  <?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
    <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
  <?php endif; ?> 
</div>