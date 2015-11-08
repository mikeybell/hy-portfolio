<?php

/*
	Template Name: Home Page, No Sidebar
*/

get_header();  ?>

<!-- HERO -->
<section class="hero" id="top">
  <div class="container">
    <!-- <img src="<?php echo get_bloginfo('template_url') ?>/images/mikebell.png"/> -->
    <h1 id="mikebell" class="animated bounceInDown">Mike Bell</h1>
    <p class="sub animated zoomInLeft">Front-End Developer</p>
    <p class="sub and animated zoomIn">&</p>
    <p class="sub animated zoomInRight">Designer</p>
    <a href="#contact" class="btn btn-blue connect">Let's Work Together</a>

  </div> <!-- /.container -->
</section> <!-- /section.hero -->

<!-- BIO -->
<section class="bio" id="about">
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
        <div class="bio-pic animated fadeInUp">
          <?php the_post_thumbnail('full'); ?>  
        </div> <!-- /.bio-pic -->
        <div class="bio-text animated fadeInUp">
          <?php the_content(); ?>
        

          <div class="bio-social">
            <ul>
              <?php while(has_sub_field('social')): ?>
                <li>
                  <a href="<?php the_sub_field('social_link'); ?>" target="_blank">
                    <i class="fa fa-<?php the_sub_field('social_icon'); ?>"></i>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          </div> <!-- /.bio-social -->

        </div> <!-- /.bio-text -->

        <!-- <div class="skill-box">
          <ul class="clearfix">
            <?php while(has_sub_field('skills')): ?>
              <li>
                <span class="devicons devicons-<?php the_sub_field('skill'); ?>"></span>
              </li>
            <?php endwhile; ?>
          </ul>
        </div> <!-- /.skill-box -->

      <?php endwhile; ?>    
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <!-- END QUERY -->
        

  </div> <!-- .container -->
</section> <!-- /section.bio -->



<!-- PORTFOLIO -->
<section class="portfolio" id="portfolio">
    <div class="title wow fadeInUp">
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
            <div class="project clearfix wow fadeInUp">
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
                    <a href="<?php the_field('live_link'); ?>" target="_blank" class="btn btn-blue">View Live</a>
                    <a href="<?php the_field('github_link'); ?>" target="_blank" class="btn btn-grey">View Github</a>
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

<section class="contact" id="contact">
  <div class="container clearfix">
    <div class="title wow fadeInUp">
      <h2>Get In Touch</h2>
    </div> <!-- /.title -->

    <div class="contact-sub wow fadeInUp">
      <p>If you are looking for a developer with a strong visual background, or just want to say hi, I would love to hear from you!</p>
      <div class="email">
        <a href="mailto:hello@mikedoesstuff.com" class="btn btn-grey">hello@mikedoesstuff.com</a>
      </div> <!-- /.email -->
    </div> <!-- /.contact-sub -->

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
          <div class="contact-form wow fadeInUp">
            <?php the_content(); ?>  
          </div> <!-- /.contact-form -->
         
        <?php endwhile; ?>    
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      <!-- END QUERY -->

  </div> <!-- /.container -->
</section> <!-- /section.contact -->



<!-- SOCIAL -->

<section class="social-main">
  <div class="container">
    
    <!-- START QUERY -->
    <?php $socialQuery = new WP_Query(
      array(
        'post_type'=>'bio'
        )
    ); ?>
    
    <!-- LOOP -->
    <?php if ($socialQuery->have_posts()): ?>
      <?php while ($socialQuery->have_posts()): $socialQuery->the_post(); ?>
        <!-- stuff goes here -->
        
        <div class="social wow zoomIn">
          <ul>
            <?php while(has_sub_field('social')): ?>
              <li>
                <a href="<?php the_sub_field('social_link'); ?>" target="_blank">
                  <i class="fa fa-<?php the_sub_field('social_icon'); ?>"></i>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        </div> <!-- /.social -->

      <?php endwhile; ?>    
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
    <!-- END QUERY -->
      
    
  </div> <!-- /.container -->
</section> <!-- /section.social-main -->



<?php get_footer(); ?>