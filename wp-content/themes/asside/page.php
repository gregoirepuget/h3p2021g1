<?php get_header(); ?>
<?php get_sidebar(); ?>
<main role="main" class="probootstrap-main js-probootstrap-main">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-12">
        <?php
        if(have_posts())
        {
          while(have_posts())
          {
            the_post();
          ?>
          <p class="mb-5">
            <!--<img src="<?php echo IMAGES_URL."/"; ?>img_bg_2.jpg" alt="Free Bootstrap 4 Template by uicookies.com" class="img-fluid">-->
            <?php the_post_thumbnail( 'page-thumb', array("alt"=>get_the_title(), "class"=>"img-fluid") ); ?>
          </p>

          <div class="row">
            <div class="col-xl-8 col-lg-12 mx-auto">
              <h1 class="mb-3"><?php the_title(); ?></h1>
              <?php the_content(); ?>
            </div>
          </div>
          <?php
          }
        }
        ?>
      </div>
    </div>
    <!-- END row -->

    <section class="probootstrap-section">
      <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-8 mx-auto">
                <h2 class="h1 mb-5 mt-0">The Team</h2>
              </div>
            </div>

          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="owl-carousel probootstrap-owl">
              <!-- <div class="item">
                <img src="images/person_1.jpg" class="img-fluid" alt="Free Template by uicookies.com">
                <div class="p-4 border border-top-0">
                  <h4>James Carl</h4>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div> -->
              <?php
                $args = array(
                  'post_type' => 'membre',
                  'posts_per_page' => -1,
                );
                $the_query = new WP_Query( $args );

                if($the_query -> have_posts())
                {
                  while($the_query -> have_posts())
                  {
                    $the_query -> the_post();
                  ?>
                  <div class="item">
                    <?php the_post_thumbnail('membre-thumb', array(
                      "class" => "img-fluid",
                      "alt"   => get_the_title(),
                    ) ); ?>
                    <div class="p-4 border border-top-0">
                      <h4><?php the_title(); ?></h4>
                      <?php the_content(); ?>
                    </div>
                  </div>
                  <?php
                  }
                }
                else{
                  echo '<p>Pas d\'item dans le portfolio</p>';
                }
                wp_reset_postdata();
              ?>

            </div>
          </div>
        </div>



      </div>
    </section>
</main>



<?php get_footer(); ?>
