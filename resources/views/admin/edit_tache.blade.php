<!DOCTYPE html>
<html>
  <head>
      <base href="/public">
    @include('admin.css')

  </head>
  <body>

    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')

      <div class="page-content">

        <h1 class="post_title" >Edit my task</h1>

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

          <form method="post" action="{{route('taches.update',$tache->id)}}">
        @csrf
        @method('put')
        <label for="titre">Titre:</label>
        <input type="text" name="titre" value="{{$tache->titre}}">
        <label for="description">Description:</label>
        <input type="text" name="description" value="{{$tache->description}}">
        
        <input type="radio" id="termine" name="etat" value="termine">
        <label for="Terminé">Terminé</label>
        <input type="radio" id="non_termine" name="etat" value="non_termine">
        <label for="Non terminé">Non terminé</label>

        <div>
            <input type="submit" value="Modifier la tache">
        </div>
    </form>

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
