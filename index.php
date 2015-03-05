<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
	<div class="hero">
	  <h1 class="heroText">Welcome to my Recipes Theme</h1>
	   <?php get_search_form(); ?>
	</div>
	<div class="pageNavWrapper">
		<p><?php
		$total = wp_count_posts()->publish;
		echo $total;
		?> Recipes</p> 
		<?php  wp_pagenavi(); ?>
	</div>
    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>