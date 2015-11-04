<?php

/*
	Template Name: Home Page, No Sidebar
*/

get_header();  ?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <img src="<?php echo get_bloginfo('template_url') ?>/images/mikebell.png"/>
    <a href="#" class="btn btn-blue connect">Let's Work Together</a>

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



<!-- PORTFOLIO -->
<section class="portfolio">
    <div class="title">
      <h2>Portfolio</h2>
    </div> <!-- /.title -->


    <!-- START QUERY -->
    <?php $portfolioQuery = new WP_Query(
      array(
        'post_type'=>'portfolio',
        'order'=>'ASC'
        )
    ); ?>
    
    
        <!-- LOOP -->
        <?php if ($portfolioQuery->have_posts()): ?>
          <?php while ($portfolioQuery->have_posts()): $portfolioQuery->the_post(); ?>
            <!-- stuff goes here -->
            <div class="project clearfix">
              <div class="container">

                <div class="portfolio-img">
                  <?php the_post_thumbnail('large'); ?>  
                </div> <!-- /.portfolio-img -->

                <div class="portfolio-info">
                  <div class="portfolio-title">
                    <h3><?php the_title(); ?></h3> 
                  </div> <!-- /.portfolio-title -->

                  <div class="portfolio-desc">
                    <?php the_content(); ?>
                  </div> <!-- /.portfolio-desc -->

                  <div class="portfolio-tech">
                    <ul class="clearfix">
                      <?php while(has_sub_field('technologies')): ?>
                        <li>
                          <span class="devicons devicons-<?php the_sub_field('technology'); ?>"></span>
                        </li>
                      <?php endwhile; ?>
                    </ul>
                  </div> <!-- /.portfolio-tech -->
                  
                  <div class="portfolio-links">
                    <a href="<?php the_field('live_link'); ?>" class="btn btn-blue">View Live</a>
                    <a href="<?php the_field('github_link'); ?>" class="btn btn-grey">View Github</a>
                  </div> <!-- /.portfolio-links -->

                </div> <!-- /.portfolio-info -->

              </div> <!-- /.container -->
            </div> <!-- /.project -->

            <?php endwhile; ?>    
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
          <!-- END QUERY -->
          
</section> <!-- /section.portfolio -->



<!-- CONTACT -->

<section class="contact">
  <div class="container clearfix">
    <div class="title">
      <h2>Get In Touch</h2>
    </div> <!-- /.title -->

      <!-- START QUERY -->
      <?php $contactQuery = new WP_Query(
        array(
          'post_type'=>'contact'
          )
      ); ?>
      
      <!-- LOOP -->
      <?php if ($contactQuery->have_posts()): ?>
        <?php while ($contactQuery->have_posts()): $contactQuery->the_post(); ?>
          <!-- stuff goes here -->
          <div class="contact-form">
            <?php the_content(); ?>  
          </div> <!-- /.contact-form -->
         
        <?php endwhile; ?>    
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      <!-- END QUERY -->

  </div> <!-- /.container -->
</section> <!-- /section.contact -->









<?php get_footer(); ?>