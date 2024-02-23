<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
        @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')    
      </div>
      <!-- header section end -->
 
      <div style="text-align: center;" class="col-md-12">
                     <div>
                        <img
                        style="margin-top: 50px; padding: 20px; margin-bottom: 20px; height:80%; width=350px"
                        src="images/{{$post->image}}"
                        class="services_img">
                     </div>
                     <h1> <b>{{$post->title}}</b> </h1>
                     <h4>{{$post->description}}</h4>
                  </div>



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