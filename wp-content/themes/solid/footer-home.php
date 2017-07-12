<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solid
 */

?>

	<div id="footerwrap">
	<div class="container">
		<?php if(is_active_sidebar('sidebar-2')) {?>
			<div class="row">
				<?php dynamic_sidebar('sidebar-2') ?>
			</div>
			<?php } ?>
		<div class="row">
			<div class="col-lg-4">
				<h4>About</h4>
				<div class="hline-w"></div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</div>
			<div class="col-lg-4">
				<h4><?php echo get_theme_mod('header_social'); ?></h4>
				<div class="hline-w"></div>
				<p>
					<a href="<?php echo get_theme_mod('dribble_url'); ?>"><i class="fa fa-<?php echo get_theme_mod('dribble_social'); ?>"></i></a>
					<a href="<?php echo get_theme_mod('facebook_url'); ?>"><i class="fa fa-<?php echo get_theme_mod('facebook_social'); ?>"></i></a>
					<a href="<?php echo get_theme_mod('twitter_social'); ?>"><i class="fa fa-<?php echo get_theme_mod('twitter_social'); ?>"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-tumblr"></i></a>
				</p>
			</div>
			<div class="col-lg-4">
				<h4>Our Bunker</h4>
				<div class="hline-w"></div>
				<p>
					Some Ave, 987,<br/>
					23890, New York,<br/>
					United States.<br/>
				</p>
			</div>

		</div>
	</div>
 </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
