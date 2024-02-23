<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <link rel="stylesheet" href="{{ asset('pdf.css') }}" type="text/css">

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
    </style>

  </head>
  <body>

    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')

      <div class="page-content">

        <h1 class="post_title" >My tasks</h1>
        <table class="table_des" rules="all" rules="all" >
        <tr th_des>
            <th>Id</th>
            <th>Titre</th>
            <th>Description</th>
            <th>état</th>
        </tr>
        @foreach($taches as $tache)
    <tr th_des>
        <td> {{$tache->id}} </td>
        <td>{{$tache->titre}}</td>
        <td>{{$tache->description}}</td>
        <td>{{$tache->etat}}</td>
    </tr>
    @endforeach
    </table>
    <form action="{{route('taches.create')}}">
        <input type="submit" value="Ajouter une tache">
    </form>
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
