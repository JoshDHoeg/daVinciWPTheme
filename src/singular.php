<?php
/**
 * Template Post Type: post, page
 *
 *
 * @package WordPress
 * @subpackage Vicuna
 * @since Vicuna 1.0
 */

get_header();
?>

<section role="main" id="main">

  <div class="container content">
    <div class="row">
      <div class="offset-sm-1 col-sm-10">
        <?php
          while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
          endwhile;
        ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
