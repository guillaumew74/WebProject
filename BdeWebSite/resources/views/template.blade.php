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

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                      <img src="img2.png" style="margin-left: -16px;">
                    </a>
                </li>
                <li>
                    <a href="/pevenements" method="POST" action="{{ url('/p evenements') }}">Proposition Evenement</a>
                </li>
                <li>
                    <a href="/pevenements" method="POST" action="{{ url('/p evenements') }}">Proposition Evenement</a>
                </li>
                <li>
                    <a href="/evenements" method="POST" action="{{ url('/evenements') }}">Evenements</a>
                </li>
                <li>
                    <a href="/boutique" method="POST" action="{{ url('/boutique') }}">Boutique</a>
                </li>
                <li>
                    <a href="/panier" method="POST" action="{{ url('/panier') }}">Panier</a>
                </li>
                <li>
                    <a href="/login" method="POST" action="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>

@yield('contenu')

     <footer class="py-5 bg-dark" style="color: black;">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Guillaume Woreth / Niels Boeckx / Remi Papin / Zacharia Azzouzi Clausel</p>
            <img class="m-0 text-left" src="img/LogoCesi.png">
          </div>
      </footer>
    </div>
    <!-- /#wrapper -->


    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

