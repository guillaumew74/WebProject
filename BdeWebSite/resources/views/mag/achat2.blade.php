@extends('template1')


@section('nav')
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/">Youtube</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/">Evenements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="achat">Achat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/login" method="POST" action="{{ url('/login') }}">Connexion</a>
            </li>
              </li>
          </ul>
        </div>
      </div>
    </nav>
@endsection

@section('contenu')
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Achat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rechercher par
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Prix</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </div>
</nav>

<section id="about" >

@foreach($produit as $prod)
      <div >
        <div class="row">
          <div class="col-lg-1 mx-8">

    <div class="card" style="width: 18rem;">
  <img class="card-img-top"  alt="Card image cap" src="{{$prod->urlimg}}">
  <div class="card-body">
    <h5 class="card-title">{{$prod->nom}}</h5>
    <p class="card-text">{{$prod->description}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$prod->prix}}</li>

  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Acheter</a>
  </div>
        </div>

    </div>
  </div>
</div>
@endforeach
</section>
@endsection
