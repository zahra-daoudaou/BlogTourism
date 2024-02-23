<div class="page-content">
  <div class="page-header">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Admin Page</h2>
    </div>
  </div>
        <h3>Ajouter une tache</h3>

    <form method="post" action="{{route('taches.store')}}">
        @csrf
        @method('post')
        <label for="titre">Titre:</label>
        <input type="text" name="titre">
        <label for="description">Description:</label>
        <input type="text" name="description">

        <input type="radio" id="termine" name="etat" value="termine">
        <label for="Terminé">Terminé</label>
        <input type="radio" id="non_termine" name="etat" value="non_termine">
        <label for="Non terminé">Non terminé</label>

        <div>
            <input type="submit" value="Ajouter la tache">
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
