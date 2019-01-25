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
        <!-- /.col-lg-3 -->

        

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{ $articles['1']->imageLink }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/buy/{{ $articles['1']->idArticles }}"> {{ $articles['1']->name }}</a>
                  </h4>
                  <h5>{{ $articles['1']->price }} €</h5>
                  <p class="card-text">{{ $articles['1']->categorie }}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{ $articles['2']->imageLink }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/buy/{{ $articles['2']->idArticles }}">{{ $articles['2']->name }}</a>
                  </h4>
                  <h5>{{ $articles['2']->price }} €</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{ $articles['3']->imageLink }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/buy/{{ $articles['3']->idArticles }}">{{ $articles['3']->name }}</a>
                  </h4>
                  <h5>{{ $articles['3']->price }} €</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{ $articles['4']->imageLink }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/buy/{{ $articles['4']->idArticles }}">{{ $articles['4']->name }}</a>
                  </h4>
                  <h5>{{ $articles['4']->price }} €</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{ $articles['5']->imageLink }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/buy/{{ $articles['5']->idArticles }}">{{ $articles['5']->name }}</a>
                  </h4>
                  <h5>{{ $articles['5']->price }} €</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{ $articles['6']->imageLink }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/buy/{{ $articles['6']->idArticles }}">{{ $articles['6']->name }}</a>
                  </h4>
                  <h5>{{ $articles['6']->price }} €</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

      </div>
      <!-- /.row -->

    </div>
    
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>



@endsection