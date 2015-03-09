		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_post_thumbnail('medium'); ?>
			<p class='post-category'><?php the_category(', '); ?></p>
			<h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
          <?php the_title(); ?>
        </a>
      </h2>


		</article><!-- #post-## -->