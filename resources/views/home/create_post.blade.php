<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
        @include('home.homecss')
        <style>
        .post_title{
            font-size:30px;
            font-weight:bold;
            text-align:center;
            padding:30px;
        }
        .div_center{
            text-align:center;
            padding:30px; 
        }
    </style>
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

      <div class="page-content">
        <h1 class="post_title" >CREATE A POST</h1>

        <div>
            @if(session()->has('msg'))
            <div class="alert alert-success">
                <button type="button" class="close" 
                    data-dismiss="alert" aria-hidden="true" >x</button>
                {{session('msg')}}
            </div>
            @endif
        </div>

        <div>
        <form method="post" action="{{url('user_post')}}" enctype="multipart/form-data">
        @csrf
        @method('post')

            <div class="div_center">
                <label for="title">Add title</label>
                <input type="text" name="title">
            </div>
            
            <div class="div_center">
                <label for="description">Add description</label>
                <textarea id="description" name="description" cols="50" rows="20" required></textarea>
            </div>
            <div class="div_center">
                <label for="image">Add Image</label>
                <input type="file" name="image">
            </div>
            <div class="div_center">
                <input type="submit">
            </div>

        </form>
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