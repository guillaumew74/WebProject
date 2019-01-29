@extends('template')

@section('contenu')
<div class="wrapper">
{{-- <header class="business-header"> --}}
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        {{-- <img class="img-fluid rounded" src="uploads/1kY0OHGElC.png" alt=""> --}}
        <h1 class="display-3 text-center mt-4">{{ $eventShow->title }}</h1>

        <img class="img-fluid rounded" src="{{ URL::asset($eventShow->imageLink) }}" alt="">

      </div>

    </div>
  </div>
{{--     </header> --}}

<!-- Page Content -->
<div class="container">

  <div class="row">
    <div class="col-sm-8">
      <h2 class="mt-4">Description</h2>
      <p>{{ $eventShow->description }}</p>
      <br>
      <h2>Nombre de vote : {{ $eventShow->vote }}</h2>
      <br>
      <div style="display: none">{!! $concVote = 'vote' . $eventShow->idEvents !!}</div>
      @if (! session()->has($concVote))
      <a href="/vote/{{ $eventShow->idEvents }}" class="btn btn-primary">Votez pour cette idée ! </a>
      @else
      <a class="btn btn-primary disabled" aria-disabled="true" style="font-size:20px; color:white;">Vous avez déja voté pour cette idée</a>
      @endif


    </div>
    <div class="col-sm-4">
            <h2 class="mt-4">Informations sur l'événements</h2>
      @if( $eventShow->payable  == 0)

      <p>L'événenement est <strong>gratuit</strong>  !</p>
      @else
      <p>Le prix de la participation : <strong>{{ $eventShow->payable }} €</strong></p>
      @endif

      @if( $eventShow->recurent == '0')
      <p>Cette événement est <strong>unique</strong></p>
      @else
      <p>Cette événement est <strong>{{ $eventShow->recurent }}</strong> </p>
      @endif
      <p>Date :<strong>{{ $eventShow->date }}.</strong></p>
      <address>
        <abbr >Email:</abbr>
        <a href="mailto:{{ $eventShow->owner }}">{{ $eventShow->owner }}</a>
      </address>
 </div>
</div>

<!-- /.row -->

<div class="row" >
  <div class="col-lg-8 my-6">
      <a class="btn btn-primary btn-sm" href="/showIdea">Retour à la navigation</a>
    </div>
  </div>
</div>
</div>
    <!-- /.container -->
@endsection
