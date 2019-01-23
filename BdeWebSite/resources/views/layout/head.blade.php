<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="BdeWebSite Laravel5/boostrap Project">
  <meta name="author" content="Guillaume Woreth/ Niels Boeckx/ Remi Papin/ Zacharia Azzouzi Clausel">
  <link rel="shortcut icon" href="{{{ asset('../img/favicon.png') }}}">

  <title>BdeWebSite</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- Use fontawesome icon -->
  <link href="{{ URL::asset('fontawesome/css/all.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('/css/about.css') }}" rel="stylesheet">

      <!--[if lt IE 9]>
      {{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
      {{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
      <![endif]-->


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

