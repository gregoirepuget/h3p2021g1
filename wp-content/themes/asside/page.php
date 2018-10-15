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
          <p class="mb-5"><img src="<?php echo IMAGES_URL."/"; ?>img_bg_2.jpg" alt="Free Bootstrap 4 Template by uicookies.com" class="img-fluid"></p>

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
</main>



<?php get_footer(); ?>
