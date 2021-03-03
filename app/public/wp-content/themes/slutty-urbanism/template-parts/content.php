<?php
/**
 *
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package slutty_urbanism
 */

?>


   <article class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
    <div class="imagebox">
    <img src='<?php the_post_thumbnail_url() ?>'>
	    </div><!-- imagebox -->
      
    <div class="card-content">
      	<p class="card-tags">
        <span class="card-tag">Blogpost</span>
        <span class="card-tag">Cities we fuck</span>
        </p>
        <h1 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h1>
        <p class="card-desc"> by <a href="#"><?php the_author()?></a></p>
      </div><!-- card-content -->

   </article><!-- #post-<?php the_ID(); ?> -->
