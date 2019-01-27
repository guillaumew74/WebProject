@extends('templateuser')

@section('contenu')
    <br>
  <div class="col-sm-offset-4 col-sm-4">
<div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Liste des liens administrateur</h3>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Ressource administrateur</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td></td>
              <td><strong><a class="text-success" href="/user">Gérer utilisateur</a></strong></td>
            </tr>
            <tr>
              <td></td>
              <td><strong><a class="text-success" href="/adarticles">Ajouter des articles</a></strong></td>
            </tr>

            <tr>
              <td></td>
              <td><strong><a class="text-success" href="/suparticles">Suprimer des articles</a></strong></td>
            </tr>

              <tr>
              <td></td>
              <td><strong><a class="text-success" href="/form">Ajouter événement</a></strong></td>
            </tr>

            <tr>
              <td></td>
              <td><strong><a class="text-success" href="/validevent">Valider événement</a></strong></td>
            </tr>

             <tr>
              <td></td>
              <td><strong><a class="text-success" href="/api">Api Node.js</a></strong></td>
            </tr>
          </tbody>
      </table>
    </div>
</div>

@endsection
