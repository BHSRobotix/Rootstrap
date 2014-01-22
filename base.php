<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <!--<div class="wrap container" role="document">
    <div class="content row">-->

   <div class="container content-container">
      <div class="col-md-2 logo-pad visible-md visible-lg">
         <a href="http://www.bhsrobotix.com/">
            <img src="http://www.bhsrobotix.com/wp-content/themes/Rootstrap/assets/img/logo.png" class="img-responsive logo-bottom-border"></a>
         <a href="http://www.nrgenergy.com/">
            <img src="http://www.bhsrobotix.com/wp-content/themes/Rootstrap/assets/img/logo_nrg_mini.png" class="img-responsive"></a>
         <a href="http://www.lockheedmartin.com/">
            <img src="http://www.bhsrobotix.com/wp-content/themes/Rootstrap/assets/img/logo_lockheed_mini.png" class="img-responsive"></a>
         <a href="http://www.ptc.com/">
            <img src="http://www.bhsrobotix.com/wp-content/themes/Rootstrap/assets/img/logo_ptc_mini.png" class="img-responsive"></a>
         <a href="http://am.renesas.com/">
            <img src="http://www.bhsrobotix.com/wp-content/themes/Rootstrap/assets/img/logo_renesas_mini.png" class="img-responsive"></a>
      </div>

      <!--Main Content-->
        <main class="main col-md-10 content-column" role="main">
          <?php include roots_template_path(); ?>
        </main><!-- /.main -->
        
    </div>

  <!--  </div>--><!-- /.content -->
  <!--</div>--><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>
  <script>
      $(document).ready(function() {
      
         $('#calendar').fullCalendar({
         
            events: 'http://www.google.com/calendar/feeds/bhsrobotix2876%40gmail.com/public/basic',
            
            eventClick: function(event) {
               // opens events in a popup window
               window.open(event.url, 'gcalevent', 'width=700,height=600');
               return false;
            },
            
            loading: function(bool) {
               if (bool) {
                  $('#loading').show();
               }else{
                  $('#loading').hide();
               }
            }
            
         });
         
      });
   </script>
  <script>
       // Create an array of images that you'd like to use
       var images = [
         , 'http://farm8.staticflickr.com/7438/10451371216_789fb0fa6e_b.jpg'
         , 'http://farm4.staticflickr.com/3716/10451360606_ab3db8bc16_b.jpg'
         , 'http://farm8.staticflickr.com/7441/10451337574_bc235db6a2_b.jpg'
         , 'http://farm3.staticflickr.com/2807/10451425704_3488bc0269_b.jpg'
         , 'http://farm4.staticflickr.com/3728/11847010955_957a8f309c_b.jpg'
         , 'http://farm3.staticflickr.com/2891/11893431033_53df28fb92_b.jpg'
         , 'http://www.bhsrobotix.com/wp-content/themes/Rootstrap/assets/img/bs_goal.png'                                                     //High Goal Wooden Frame
         , 'http://farm3.staticflickr.com/2883/11893131065_62e7d5df5f_b.jpg'     //Lego bot holding aluminum ball
         , 'http://farm8.staticflickr.com/7325/11893531834_07e66e7ec0_b.jpg'     //Battery
         , 'http://fa rm8.staticflickr.com/7456/11893119515_0758e39306_b.jpg'     //Electrical
         , 'http://farm4.staticflickr.com/3759/11893522624_15c583e4b2_b.jpg'     //Whiteboard
         , 'http://farm4.staticflickr.com/3790/12005345763_6879810a0c_b.jpg'     //Blue electrical thing
         , 'http://farm6.staticflickr.com/5524/12005043495_b4039f6a08_b.jpg'
         , 'http://farm8.staticflickr.com/7289/12005044575_049b221dd6_b.jpg'
         , 'http://farm4.staticflickr.com/3809/12005845866_5edb4e008c_b.jpg'
         , 'http://farm6.staticflickr.com/5471/12004899075_3209d896c7_b.jpg'
       ];
    
       // Get a random number between 1 and the number of images
       var randomNumber = Math.floor( (Math.random() * (images.length - 1)) + 1 );
       // Use the random number to load a random image
       $.backstretch(images[randomNumber], {fade: 250});
   </script>
</body>
</html>
