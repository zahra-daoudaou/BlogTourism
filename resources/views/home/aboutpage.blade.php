<!DOCTYPE html>
<html lang="en">
   <head>
        @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
         <!-- banner section start -->
         @include('home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      @include('home.gallary')
      <!-- services section end -->
      <!-- about section start -->
      @include('home.about')
      <!-- about section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="blog_taital">Discover more!</h1>
            <p class="blog_text">
            Explore the beauty of Morocco with my 
            blog! From the bustling souks of Marrakech 
            to the blue streets of Chefchaouen, discover 
            vibrant culture, breathtaking landscapes, 
            and rich history. Whether you're planning a 
            trip or curious about this North African gem, 
            join me on a virtual tour of Morocco's most 
            captivating destinations!
            </p>
            </div>
         </div>
      </div>
      <!-- blog section end -->

  @include('home.about')

      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->

      <!-- copyright section start -->
      <!-- downloaded template from 'Free html Templates' -->
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>
