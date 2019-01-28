 @extends('template')

@section('contenu')


<div id="wrapper">
<!-- Page Content -->
<div class="page-content-wrapper">

    @for ($i = 0; $i < $nbrOfItem; $i++)

      <div class="card conteneur" style="width: 18rem;">

        <img style="width:50%; " class="card-img-top contenu" src="https://cdn1.ideecadeau.fr/media/catalog/product/l/a/la-tasse-magique-ideecadeau-fr_5451-4ed425a6.jpg" alt="">
        <div class="card-body">
          <h5 class="card-title">Prix: X €</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="/buy/1" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>


    <!-- /.row -->
    @endfor

  </div>
</div>

@endsection


