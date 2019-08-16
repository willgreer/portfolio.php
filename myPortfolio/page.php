<?php get_header(); ?>

<div class="content-block">
<h2 class="page-title"><?php wp_title($sep = ""); ?></h2>
<div class='content-pages'>
  	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
  </div> <!-- content-pages -->
  </div> <!-- content block -->

<?php get_footer();?>

