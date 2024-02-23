<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style>
        .post_title{
            font-size:30px;
            font-weight:bold;
            text-align:center;
            padding:30px;
            color:white;
        }
        .div_center{
            text-align:center;
            padding:30px; 
        }
    </style>

  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')

      <div class="page-content">
        <h1 class="post_title" >ADD A CATEGORIE</h1>

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
        <form method="POST" action="{{url('add_categories')}}" enctype="multipart/form-data">
        @csrf

            <div class="div_center">
                <label for="title">Add name</label>
                <input type="text" name="title">
            </div>
            <div class="div_center">
                <input type="submit">
            </div>
        </form>
        </div>
        <div>
            @if($errors->all())
            <ul>
                @foreach($errors->all() as $error)
                <li> {{$error}} </li>
                @endforeach
            </ul>
            @endif
        </div>
      </div>

    <!-- Footer Navigation-->
      @include('admin.footer')
    <!-- Footer Navigation end-->
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="admincss/js/front.js"></script>
  </body>
</html>