@extends('templateuser')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Il y a un problème !</h3>
      </div>
      <div class="panel-body">
        <p>Il n'y a plus d'événement à afficher...</p>
        <a href="/">Retour au Menu</a>
      </div>
    </div>
  </div>
@endsection
