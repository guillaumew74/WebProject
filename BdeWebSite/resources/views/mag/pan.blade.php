 
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


    @for ($i = 0; $i < $nbrOfItem; $i++)
    

    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="https://cdn1.ideecadeau.fr/media/catalog/product/l/a/la-tasse-magique-ideecadeau-fr_5451-4ed425a6.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="/buy/1"> wdkfj</a>
            </h4>
            <h5> test : {{$items}}{{$nbrOfItem}}</h5>
            <p class="card-text">test</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    @endfor

  </div>


</div>
<!-- /.container -->


<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>





@endsection