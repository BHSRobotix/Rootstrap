<?php
/*
Template Name: Sponsors Template with Carousel
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="row">
            <div class="col-md-12">
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active carousel-circular-indicator"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1" class="carousel-circular-indicator"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2" class="carousel-circular-indicator"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2" class="carousel-circular-indicator"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                     <div class="item active">
                        <div class="flex-video widescreen">
                           <iframe src="http://www.youtube.com/embed/h8UfePJHSQs" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="carousel-caption"></div>
                     </div>
                     <div class="item">
                        <div class="flex-video widescreen">
                           <iframe src="http://www.youtube.com/embed/oj7ypZwilY0" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="carousel-caption"></div>
                     </div>
                     <div class="item">
                        <div class="flex-video widescreen">
                           <iframe src="http://www.youtube.com/embed/yLzz4xDzpuU" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="carousel-caption"></div>
                     </div>
                     <div class="item">
                        <div class="flex-video widescreen">
                           <iframe src="http://www.youtube.com/embed/pIt2Tos6fUw" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="carousel-caption"></div>
                     </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
               </div>
            </div>
         </div>

<?php get_template_part('templates/content', 'page'); ?>


