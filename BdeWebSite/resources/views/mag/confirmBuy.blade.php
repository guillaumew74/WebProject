
@extends('template')

@section('contenu')
<br>
<br>
<br>

  <!-- Page Content -->
  <div class="container">

    <div class="row">



      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ $article->imageLink }}" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/buy/1"> {{ $article->name }}</a>
            </h4>
            <h5>{{ $article->price }} €</h5>
            <p class="card-text">{{ $article->categorie }}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
    </div>




      <div class="card h-100">

        <div class="card-body">
          <h4 class="card-title">
            Confirmation d'achat
          </h4>

          <p class="card-text">En cliquant sur "confirmer" vous confirmez vouloir ajouter cet article à votre panier.</p>
       </div>
       <div class="card-footer">
        <a href = "/buyArticle/{{ $article->idArticles }}" > Confirmer </a>
      </div>
    </div>
  </div>

<!-- /.row -->

</div>
<!-- /.container -->

@endsection
