<?php get_header(); ?>

<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
?>
<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div style="background: url(<?php echo $src[0]; ?>)"class="heroWrapper">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </div>
          <div class="entry-utility">
            <h3>Categories</h3>
            <?php echo get_the_category_list();?>
          </div><!-- .entry-utility -->
          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
            <div class="printWrapper">
              <a href="javascript:window.print()"><i class="fa fa-print"></i></a>
              <a href="javascript:window.print()" class='printText'>Print Recipe</p></a>
            </div>
          </div><!-- .entry-content -->
        <div class="postInfoWrapper">
          <div class="postInfo">
            <div class="tagsWrapper">
              <h3>Tags</h3>
              <?php the_tags('', ' '); ?>
            </div>
            <p>Recipe By</p>
            <h3 class='authorName'><?php echo get_the_author(); ?></h3>
            <?php echo get_avatar(get_the_author_meta('user_email')); ?>
            <h3><?php comments_number()?></h3>
            <?php comments_template( '', true ); ?>
          </div>
        </div>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

     <?php dynamic_sidebar('primary-widget-area'); ?> 

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>