@extends('template')

@section('contenu')
<div class="wrapper">
  <!-- Page Content -->
  <div class="page-content-wrapper">
    <div class="container-fluid">
      <!-- Page Content -->
      <div class="container">

        <div class="row">

          <div class="col-lg-3">

            <h1>BDE Shop</h1>
            <div class="list-group">
              
             <a href="/cgv" class="list-group-item">Conditions générales de ventes</a>
             <a href="/boutique/vetement" class="list-group-item">Vetements</a>
             <a href="/boutique/goodies" class="list-group-item">Goodies</a> 

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
                  <h5 class="card-title">{{$article->name}} : {{$article->price}} €</h5>
                  <p class="card-text">{{$article->description}}.</p>
                  <a href="/buy/{{$article->idArticles}}" class="btn btn-primary btn-sm">Acheter</a> 
                </div>
              </div>


              <!-- /.row -->
              @endforeach

            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection