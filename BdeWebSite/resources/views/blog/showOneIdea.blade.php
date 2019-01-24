@extends('template')

@section('contenu')

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

      <a href="/vote/{{ $eventShow->idEvents }}" class="btn btn-primary"><i class="far fa-vote-yea" style="font-size:20px;color:white;"></i>Vote {{ $eventShow->vote }}</a>
    </div>
    <div class="col-sm-4">
            <h2 class="mt-4">Informations sur l'événements</h2>
      @if( $eventShow->payable  == 0)

      <p>L'événenement est gratuit !</p>
      @else
      <p>Le prix de participation de l'événement est de {{ $eventShow->payable }}</p>
      @endif

      @if( $eventShow->recurent == '0')
      <p>Cette événement est unique</p>
      @else
      <p>Cette événement est {{ $eventShow->recurent }}</p>
      @endif
      <address>
        <abbr title="Email">Email:</abbr>
        <a href="mailto:{{ $eventShow->owner }}">{{ $eventShow->owner }}</a>
      </address>
 </div>
</div>

<!-- /.row -->

<div class="row" >
  <div class="col-lg-8 my-6">
      <a class="btn btn-primary btn-lg" href="/showIdea">Retour à la navigation</a>
    </div>
  </div>
</div>
    <!-- /.container -->
@endsection
