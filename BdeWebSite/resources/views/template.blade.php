<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="BdeWebSite Laravel5/boostrap Project">
      <meta name="author" content="Guillaume Woreth/ Niels Boeckx/ Remi Papin/ Zacharia Azzouzi Clausel">
      <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">



      <title>BdeWebSite</title>

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
      <link href="/css/about.css"rel="stylesheet">

      <!--[if lt IE 9]>
      {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
      {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/"> <img src="img/Cesi.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/pevenements"  method="POST" action="{{ url('/p evenements') }}">Proposition Evenement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/evenements"  method="POST" action="{{ url('/evenements') }}">Evenements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/boutique"  method="POST" action="{{ url('/boutique') }}">Boutique</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/panier"  method="POST" action="{{ url('/panier') }}"> Panier</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/login"  method="POST" action="{{ url('/login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
        <div class="container text-center">
          <h1> Bde Web Site</h1>
        </div>
    </header>

    @yield('contenu')


    <!-- Footer -->
      <footer class="py-5 bg-dark">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Guillaume Woreth / Niels Boeckx / Remi Papin / Zacharia Azzouzi Clausel</p>
            <img class="m-0 text-left" src="img/LogoCesi.png">
          </div>
      </footer>


      <!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>

