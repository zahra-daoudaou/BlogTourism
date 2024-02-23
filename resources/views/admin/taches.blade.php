<!DOCTYPE html>
<html>
  <head>
      <base href="/public">
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

        <h1 class="post_title" >My tasks</h1>

          <!--<input type="search" name="search" id="search" value="{{request('search')}}">

    <ul>
        @forelse($taches as $tache)
        <li>{{$tache->titre}}</li>
        <li>{{$tache->description}}</li>
        <li>{{$tache->etat}}</li>
        @empty
        <li>Tache non trouvable!</li>
        @endforelse
    </ul>-->

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
<form action="{{ route('taches.index') }}" method="get">
        <label for="filter">Filtrer par état :</label>

        <select name="filter" id="filter">
            <option value="">Tous</option>
            <option value="terminé" {{ $filter === 'termine' ? 'selected' : '' }}>Terminées</option>
            <option value="not_completed" {{ $filter === 'non_termine' ? 'selected' : '' }}>Non terminées</option>
        </select>

        <button type="submit">Filtrer</button>
    </form>

    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>

       <!-- ----------------- -->


        <table class="table_des" rules="all" rules="all" >
        <tr th_des>
            <th>Id</th>
            <th>Titre</th>
            <th>Description</th>
            <th>état</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @forelse($taches as $tache)
    <tr th_des>
        <td> {{$tache->id}} </td>
        <td>{{$tache->titre}}</td>
        <td>{{$tache->description}}</td>
        <td>{{$tache->etat}}</td>
        <td>
        <a href="{{ route('taches.edit', $tache->id) }}">modifier</a>
        </td>
        <td>
        <form method="post" action="{{route('taches.destroy',$tache->id)}}">
            @csrf
            @method('delete')
            <input type="submit" value="supprimer">
        </form>
        </td>
        @empty
        <td>tache non trouvable!</td>
        </tr>
    @endforelse
    </table>
    <form action="{{route('taches.create')}}">
        <input type="submit" value="Ajouter une tache">
    </form>

    {{ $taches->links() }}
        

        <!-- -------------------------------- -->

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
