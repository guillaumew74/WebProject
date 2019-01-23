@extends('template')

@section('contenu')
<div id="wrapper">
<!-- Page Content -->
<div class="container">

  <!-- Heading Row -->

  <div class="row my-4">
    <div class="col-lg-1">
      {!! Form::open(array('action' => array('EventsController@showSort', $arrayShow['1']->idEvents))) !!}
      <div class="form-group uk-button">
       {!! Form::label('sortBySS', 'Trié Par : ') !!}
       {!! Form::select('sortBySS', array('R' => 'Plus récent', 'P' => 'Plus populaire'), 'R', array('onchange' => 'submitSS(this)')) !!}
       <div class="submit" style="display:none">
       {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right', 'display' => 'none']) !!}
     </div>
       {!! Form::close() !!}
     </div>
   </div>
 </div>
 <div class="row">
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
    <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
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
    @if( $arrayShow['1']->validated  == 0) {{-- Si l'event n'est pas validé on affiche la suite des events Idea  --}}
    <a class="btn btn-primary center-block" href="/showIdea/{{ $j }}">Show more event ! </a>
    @else
    <a class="btn btn-primary center-block" href="/show/{{ $j }}">Show more event ! </a>
    @endif


  </div>
  <!-- /.col-lg-6 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
</div>
@endsection

