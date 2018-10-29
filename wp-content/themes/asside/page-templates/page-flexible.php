<?php
/*

Template Name: Gabarit flexible

*/
 get_header(); ?>

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

             if( have_rows('flexible_content') )
             {
               while ( have_rows('flexible_content') )
               {
                 the_row();
                 //echo TEMPLATE_PATH."/flexible/".get_row_layout().'.php';
                include(TEMPLATE_PATH."/flexible/".get_row_layout().'.php');

               }
             }
       // loop through the rows of data

            }
          }
        ?>
      </div>
    </div>
  </div>
</main>

 <?php get_footer(); ?>
