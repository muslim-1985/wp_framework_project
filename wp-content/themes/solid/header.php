<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solid
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	</header><!-- #masthead -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php bloginfo( 'name' ); ?></a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_class'      => 'nav navbar-nav',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'container'       => false,
									'depth'           => 2,
									'walker'          => new Solid_Navwalker(),
								) );
							?>
          <!-- <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="single-post.html">SINGLE POST</a></li>
                <li><a href="portfolio.html">PORTFOLIO</a></li>
                <li><a href="single-project.html">SINGLE PROJECT</a></li>
              </ul>
            </li>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </div>
	  <div id="blue">
	    <div class="container">
				<div class="row">
					<h3>Blog List.</h3>
				</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->
	<div class="container mtb">
