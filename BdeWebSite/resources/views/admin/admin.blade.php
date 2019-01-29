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
              <td><strong><a class="text" href="/user"><i class="fas fa-users"></i>   Gérer utilisateur</a></strong></td>
            </tr>
            <tr>
              <td></td>
              <td><strong><a class="text" href="/adarticlesform"><i class="fas fa-cart-plus"></i>   Ajouter des articles</a></strong></td>
            </tr>

            <tr>
              <td></td>
              <td><strong><a class="text" href="/suparticles"><i class="fas fa-trash-alt"></i>   Suprimer des articles</a></strong></td>
            </tr>

              <tr>
              <td></td>
              <td><strong><a class="text" href="/form"><i class="fas fa-calendar"></i>   Ajouter événement</a></strong></td>
            </tr>

            <tr>
              <td></td>
              <td><strong><a class="text" href="/validevent"><i class="fas fa-check"></i> Valider événement</a></strong></td>
            </tr>

             <tr>
              <td></td>
              <td><strong><a class="text" href="/api"><i class="fab fa-node"></i>   Api Node.js (école)</a></strong></td>
            </tr>
          </tbody>
      </table>
    </div>
</div>

@endsection
