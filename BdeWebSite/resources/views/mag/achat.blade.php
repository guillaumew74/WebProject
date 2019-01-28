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



  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">BDE Shop</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Vetements</a>
          <a href="#" class="list-group-item">Goodies</a> 

        </div>

      </div>



      <div class="row">
       <br>
       <br>

       <div id="wrapper">
        <!-- Page Content -->
        <div class="page-content-wrapper">

          @foreach ($articles as $article)

          <div class="card conteneur" style="width: 18rem;">

            <img style="width:50%; " class="card-img-top contenu" src="{{$article->imageLink}}" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$article->name}}: {{$article->price}} €</h5>
              <p class="card-text">{{$article->description}}.</p>
              <a href="/buy/{{$article->idArticles}}" class="btn btn-primary">Acheter</a>
            </div>
          </div>


          <!-- /.row -->
          @endforeach

        </div>
      </div>


    </div>
  </div>
</div>
<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>



@endsection