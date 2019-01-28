@extends('templateuser')

@section('contenu')
   <div class="col-sm-offset-4 col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Il y a un problème !</h3>
      </div>
      <div class="panel-body">
        <p>Vous devez être connecté pour voir les idées d'événements</p>
        <a href="/">Retour au Menu</a>
      </div>
    </div>
  </div>
@endsection
