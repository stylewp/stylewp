<?php
/**
 * Template Name: Full Width Page
 *
 * @package stylewp
 */

get_header(); ?>


<div class="container ">

 <div class="row">

    <div id="primary" class="col-lg-12">

     <main id="main" class="" role="main">

         <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>	

		</main><!-- #main -->

	 </div><!-- #primary -->
 
   </div><!-- #row -->

</div><!-- #container -->

<?php get_footer(); ?>