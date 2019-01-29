@extends('templateuser')

@section('contenu')
    <br>
  <div class="col-sm-offset-4 col-sm-5">
<div style="width:100%"  class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Liste des articles</h3>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Articles à supprimer</th>
          </tr>
        </thead>

        @foreach($articles as $art)
        <tbody>
            <tr>
              <td></td>
              <td><img class="img-thumbnail" style="width:60%;"src="{{$art->imageLink}}"></td>
              <td><p>{{$art->idArticles}}</p></td>
              <td><p>{{$art->name}}</p></td>
              <td><p>{{$art->quantity}}</p></td>
              <td><p>{{$art->price}}</p></td>
              <td><p>{{$art->categorie}}</p></td>
              <td><a href="/suparticles/{{ $art->idArticles }}" class="btn btn-danger btn-sm" class="btnedit">Supprimer</a></td>
            </tr>
        @endforeach

          </tbody>
      </table>
    </div>
    <button type="button" class="btn btn-primary"><a style="color: white;" href="/administration">Retour Administration</a></button>
</div>


@endsection
