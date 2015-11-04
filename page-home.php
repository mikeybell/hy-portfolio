<?php

/*
	Template Name: Home Page, No Sidebar
*/

get_header();  ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <img src="<?php echo get_bloginfo('template_url') ?>/images/mikebell.png"/>
    <a href="#" class="btn btn-blue connect">Let's Connect</a>

  </div> <!-- /.container -->
</section> <!-- /section.hero -->

<!-- BIO -->
<section class="bio">
  <div class="container clearfix">
    
    <!-- START QUERY -->
    <?php $bioQuery = new WP_Query(
      array(
        'post_type'=>'bio'
        )
    ); ?>
    
    <!-- LOOP -->
    <?php if ($bioQuery->have_posts()): ?>
      <?php while ($bioQuery->have_posts()): $bioQuery->the_post(); ?>
        <!-- stuff goes here -->
        <div class="bio-pic">
          <?php the_post_thumbnail('full'); ?>  
        </div> <!-- /.bio-pic -->
        <div class="bio-text">
          <?php the_content(); ?>
        

          <div class="bio-social">
            <ul>
              <?php while(has_sub_field('social')): ?>
                <li>
                  <a href="<?php the_sub_field('social_link'); ?>">
                    <i class="fa fa-<?php the_sub_field('social_icon'); ?>"></i>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          </div> <!-- /.bio-social -->

        </div> <!-- /.bio-text -->

      <?php endwhile; ?>    
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <!-- END QUERY -->
        

  </div> <!-- .container -->
</section> <!-- /section.bio -->








<div class="main">
  <div class="container">
    
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="title">
	      <h2><?php the_title(); ?></h2>
		</div>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>