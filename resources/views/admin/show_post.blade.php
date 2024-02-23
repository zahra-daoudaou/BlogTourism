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
        .table_des{
            border:1px solid #DDD2C0;
            width:80%;
            text-align:center;
            margin-left:70px;
        }
        .th_des{
            background-color:#DDD2C0;
        }
        .img_drg{
            height:100px;
        }
    </style>

  </head>
  <body>

    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')

      <div class="page-content">

        <h1 class="post_title" >POSTS</h1>

        <div>
            <form method="get" action="{{ url('show_post') }}">
                <div class="form-group">
                    <label for="title">Filter by Title:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>


        <div>
            @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
            @endif
        </div>

        </div>
        <!-- ----------------- -->
        <table class="table_des" rules="all">
        <tr th_des>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @forelse($post as $post)
    <tr>
        <td> {{$post->id}} </td>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>
            <img class="img_drg" src="images/{{$post->image}}">
        </td>
        <td>
        <a href="">modifier</a>
        </td>
        <td>
        <form method="post" action="}}">
            @csrf
            @method('delete')
            <input type="submit" value="supprimer">
        </form>
        </td>
        @empty
        <td>Post not found!</td>
        </tr>
    @endforelse
    </table>
    <!-- ----------------- -->
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