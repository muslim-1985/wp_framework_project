/**
 * Template name: home page for qoob
 */
<?php get_header('home'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				the_content();


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-4 col-lg-offset-1">
		 		<?php if(is_active_sidebar('sidebar-4')) {?>
    				<?php dynamic_sidebar('sidebar-4') ?>
    			<?php } ?>
	 		</div>

	 		<div class="col-lg-3">
        <h4><?php echo get_cat_name(4);?></h4>
        <div class="hline"></div>
        <?php
          $query = new WP_Query('cat=4');
          if( $query->have_posts() ){
          	while( $query->have_posts() ){ $query->the_post();
          	?>
          		<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          	<?php
          	}
          	wp_reset_postdata();
          }
          else echo 'Записей нет.';
          ?>
	 		</div>
      <?php if(is_active_sidebar('sidebar-3')) {?>
  				<?php dynamic_sidebar('sidebar-3') ?>
  			<?php } ?>

	 	</div><! --/row -->
	 </div><! --/container -->

<?php get_footer('home'); ?>
