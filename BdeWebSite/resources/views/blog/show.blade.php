@extends('template')

@section('contenu')

@if(! ((! Auth::check()) && ($arrayShow['1']->validated == 0) )) {{-- Si le user n'est pas log alors il ne peux pas acceder à la boite a idee --}}


<div id="wrapper">
<!-- Page Content -->
<div class="container">

  <!-- Heading Row -->
  @if($arrayShow['1']->validated == 0) {{-- Le tri n'est disponible que pour la boite à idée --}}
  <div class="row my-4">
    <div class="col-lg-1">
      {!! Form::open(array('action' => array('EventsController@postSort', $arrayShow['1']->idEvents))) !!}
      <div class="form-group uk-button">
       {!! Form::label('sortBySS', 'Trié Par : ') !!}
       @if(isset($choice)) {{-- On retrouve le choix qui vient d'etre fait par le user --}}
       {!! Form::select('sortBySS', array('R' => 'Plus récent', 'P' => 'Plus populaire'), $choice, array('onchange' => 'submitSS(this)')) !!}
       @else
       {!! Form::select('sortBySS', array('R' => 'Plus récent', 'P' => 'Plus populaire'), 'R', array('onchange' => 'submitSS(this)')) !!}
       @endif
       {!! Form::close() !!}
     </div>
   </div>
 </div>
 @else
<div class="row my-4">
    <div class="col-lg-1">
      {!! Form::open(array('action' => array('EventsController@postSort', $arrayShow['1']->idEvents))) !!}
      <div class="form-group uk-button">
       {!! Form::label('pastEvent', 'Trié Par : ') !!}
       @if(isset($choice)) {{-- On retrouve le choix qui vient d'etre fait par le user --}}
       {!! Form::select('pastEvent', array('R' => 'Evénement à venir', 'P' => 'Evénements passés'), $choice, array('onchange' => 'submitSS(this)')) !!}
       @else
       {!! Form::select('pastEvent', array('R' => 'Evénement à venir', 'P' => 'Evénement passés'), 'R', array('onchange' => 'submitSS(this)')) !!}
       @endif
       {!! Form::close() !!}
     </div>
   </div>
 </div>
 @endif

 <div class="row my-4">
  <div class="col-lg-8">
    <img class="img-fluid rounded" src="{{ URL::asset($arrayShow['1']->imageLink) }}" alt=""> {{-- On doit uiliser la methode asset pour que le navigateur aille chercher dans public --}}

  </div>
  <!-- /.col-lg-8 -->


  <div class="col-lg-4">
    <h1>{{ $arrayShow['1']->title }}</h1>
    <p>{{ $arrayShow['1']->description }}</p>
    <a class="btn btn-primary btn-lg" href="/showOne/{{ $arrayShow['1']->idEvents }}">Voir plus</a>
  </div>
  <!-- /.col-md-4 -->

</div>
<!-- /.row -->

<!-- Call to Action Well -->
<div class="card text-white bg-secondary my-4 text-center">
  <div class="card-body">

  </div>
</div>

<!-- Content Row -->
<div class="row">
  <div class="col-md-4 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <h2 class="card-title">{{ $arrayShow['2']->title }}</h2>
        <p class="card-text">{{ $arrayShow['2']->description }}</p>
      </div>
      <div class="card-footer">
        <a href="/showOne/{{ $arrayShow['2']->idEvents }}" class="btn btn-primary">Voir plus</a>
      </div>
    </div>
  </div>
  <!-- /.col-md-4 -->
  <div class="col-md-4 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <h2 class="card-title">{{ $arrayShow['3']->title }}</h2>
        <p class="card-text">{{ $arrayShow['3']->description }}</p>
      </div>
      <div class="card-footer">
        <a href="/showOne/{{ $arrayShow['3']->idEvents }}" class="btn btn-primary">Voir plus</a>
      </div>
    </div>
  </div>
  <!-- /.col-md-4 -->
  <div class="col-md-4 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <h2 class="card-title">{{ $arrayShow['4']->title }}</h2>
        <p class="card-text">{{ $arrayShow['4']->description }}</p>
      </div>
      <div class="card-footer">
        <a href="/showOne/{{ $arrayShow['4']->idEvents }}" class="btn btn-primary">Voir plus</a>
      </div>
    </div>
  </div>
  <!-- /.col-md-4 -->

</div>
<!-- /.row -->
<div class="row">

  <div class="col-lg-6 text-center">
  @if(isset($j))

    @if( $arrayShow['1']->validated  == 0) {{-- Si l'event n'est pas validé on affiche la suite des events Idea  --}}
    <a class="btn btn-primary center-block" href="/showIdea/{{ $j }}">Show more event ! </a>
    @else
    <a class="btn btn-primary center-block" href="/show/{{ $j }}">Show more event ! </a>
    @endif

  @else

    @if( $arrayShow['1']->validated  == 0) {{-- Si l'event n'est pas validé on affiche la suite des events Idea  --}}
    <a class="btn btn-primary center-block" href="/showIdeaSort/{{ $v }}">Show more event ! </a>
    @else
    <a class="btn btn-primary center-block" href="/show/{{ $v }}">Show more event ! </a>
    @endif

  @endif


  </div>
  <!-- /.col-lg-6 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
</div>

   <script src="{{ URL::asset('js/formEvent.js') }}"></script>

@else

  <div id="wrapper">
   <div class="col-sm-offset-4 col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Il y a un problème !</h3>
      </div>
      <div class="panel-body">
        <p>Vous devez être connecté pour voir les idées d'événements</p>
        <a href="/">Retour au Menu</a>
      </div>
    </div>
  </div>
</div>

@endif
@endsection


