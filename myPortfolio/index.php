
<?php get_header(); ?>

<div class='content-pages'>
  	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
  </div> <!-- <content-pages -->

<div class="bar"></div>
<div class="bar2"></div>

<?php get_footer();?>

<!--home page only--->