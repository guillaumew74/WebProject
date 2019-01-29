@extends('template')

@section('contenu')

<div class="wrapper">
  <!-- Page Content -->
        <div class="page-content-wrapper">
            <div class="container-fluid">



        <h1>Mon panier </h1>


       <br>
       <br>

         @for ($a = 1; $a <= $numberOfItem; $a++)

          <div class="card conteneur" style="width: 18rem;">

            <img style="width:50%; " class="card-img-top contenu" src="{{$itemsbought[$a]->imageLink}}" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$itemsbought[$a]->price}} €</h5>
              <p class="card-text">{{$itemsbought[$a]->description}}.</p>
              <a href="/unBuy/{{$itemsbought[$a]->idArticles}}" class="btn btn-primary btn-sm">Supprimer</a>
            </div>
          </div>


          <!-- /.row -->
          @endfor

        </div>
      </div>

 <a href="/commande" class="btn btn-primary btn-lg">Passer commande</a>
    </div>

<!-- /.container -->
@endsection
