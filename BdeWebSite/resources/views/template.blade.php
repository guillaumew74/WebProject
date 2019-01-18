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

      <!-- Custom styles for this template -->
      <link href="css/about.css" rel="stylesheet">

      <!--[if lt IE 9]>
      {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
      {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
      <![endif]-->
</head>

<body>
  <header>

  </header>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" id="navimg">
                  <a href="/"><img alt="logo cesi" src="img/cesi.jpg"></a>
                </li>

                <li>
                    <a href="/pevenements">Proposition &Eacute;v&egrave;nement</a>
                </li>
                <li>
                    <a href="/evenements">&Eacute;v&egrave;nements</a>
                </li>
                <li>
                    <a href="/boutique">Boutique</a>
                </li>
                <li>
                    <a href="/panier">Panier</a>
                </li>
                <li>
                    <a href="/mentions-legales">Mentions L&eacute;gales</a>
                </li>
                <li>
                    <a href="/login">Login / Register</a>
                </li>
            </ul>
        </div>



@yield('contenu')
</div>
     <footer>
      <div class="container"><br></div>
          <div class="container">
            <p class="m-1 text-center text-white">Copyright &copy; Guillaume Woreth / Niels Boeckx / Remi Papin / Zacharia Azzouzi Clausel</p>
          </div>
      </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  </body>
</html>

