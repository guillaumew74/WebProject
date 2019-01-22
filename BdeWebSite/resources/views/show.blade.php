@extends('templateuser')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
      <br>
    <div class="panel panel-primary">
      <div class="panel-heading">Fiche d'utilisateur</div>
      <div class="panel-body">
        <p>Nom : {{ $user->name }}</p>
        <p>Email : {{ $user->email }}</p>
        <p>LastName : {{ $user->lastName }}</p>
        <p>Location : {{ $user->location }}</p>

        @if($user->sate == 2)
          Administrateur
        @endif

        @if($user->sate == 1)
          Cesi
        @endif

        @if($user->sate == 0)
          User
        @endif

      </div>
    </div>
    <a href="javascript:history.back()" class="btn btn-primary">
      <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>
  </div>
@endsection
