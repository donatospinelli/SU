<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package slutty_urbanism
 */

get_header();
?>
<div id="marquee-container" class="marquee-container-side">
<div class="marquee">
    <div>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua./span>
    </div>
</div>

<div class="wrapper">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10cm" height="10cm" viewBox="0 0 1000 1000" preserveAspectRatio="xMinYMin">
<defs>
<path id="textPath" d="M 250 500 A 250,250 0 1 1 250 500.0001"></path>
</defs>
<text class="circle-text" x="0" y="0" text-anchor="middle"><textPath xlink:href="#textPath" startOffset="50%">SOLIDARITY 🌃 CHATBOT 🌈 </textPath></text>
</svg>
  <h1 class="hello">Hello!</h1>
</div>


<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		/*	the_posts_navigation();*/

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</main><!-- .site-main -->
	</div><!-- .content-area -->
	</div>
<?php
get_footer();