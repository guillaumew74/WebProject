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

      <div class="col-lg-1">

        <h1 class="my-4">Mon panier </h1>
        

      </div>



      <div class="row">
       <br>
       <br>

       <div id="wrapper">
        <!-- Page Content -->
        <div class="page-content-wrapper">

         @for ($a = 1; $a <= $numberOfItem; $a++)

          <div class="card conteneur" style="width: 18rem;">

            <img style="width:50%; " class="card-img-top contenu" src="{{$itemsbought[$a]->imageLink}}" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$itemsbought[$a]->price}} €</h5>
              <p class="card-text">{{$itemsbought[$a]->description}}.</p>
              <a href="/unBuy/{{$itemsbought[$a]->idArticles}}" class="btn btn-primary">Supprimer</a>
            </div>
          </div>


          <!-- /.row -->
          @endfor

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