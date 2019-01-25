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
              <td><strong><a class="text-success" href="/adarticle">Ajouter des articles</a></strong></td>
            </tr>
            <tr>
              <td></td>
              <td><strong><a class="text-success" href="/">Modifier des articles</a></strong></td>
            </tr>
              <tr>
              <td></td>
              <td><strong><a class="text-success" href="/">Modifier événement</a></strong></td>
            </tr>
             <tr>
              <td></td>
              <td><strong><a class="text-success" href="/api">api</a></strong></td>
            </tr>
          </tbody>
      </table>
    </div>
</div>

@endsection
