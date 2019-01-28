 
@extends('template')

@section('contenu')


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Shop of bdewebsite">
  <meta name="author" content="">

  <title>Shop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

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
            <p class="card-text">{{ $article->description }}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
    </div>



    <div class="col-lg-6 col-md-6 mb-4">
      <div class="card h-100">

        <div class="card-body">
          <h4 class="card-title">
            <a href="#"> Confirmation d'achat</a>
          </h4>
         
          <p class="card-text">En cliquant sur "confirmer" vous confirmez vouloir ajouter cet article à votre panier.</p>
       </div>
       <div class="card-footer">
        <a href = "/buyArticle/{{ $article->idArticles }}" > Confirmer </a>   
      </div>
    </div>
  </div>
</div>
<!-- /.row -->

</div>
<!-- /.container -->


<!-- /.container -->


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>





@endsection