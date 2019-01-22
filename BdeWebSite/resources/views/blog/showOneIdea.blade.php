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
      <h2 class="mt-4">What We Do</h2>
      <p>{{ $eventShow->description }}</p>

      <a href="/vote/{{ $eventShow->idEvents }}" class="btn btn-primary"><i class="far fa-vote-yea" style="font-size:20px;color:white;"></i>Vote {{ $eventShow->vote }}</a>
    </div>
    <div class="col-sm-4">
      <h2 class="mt-4">Contact Us</h2>
      <address>
        <strong>Start Bootstrap</strong>
        <br>3481 Melrose Place
        <br>Beverly Hills, CA 90210
        <br>
      </address>
      <address>
        <abbr title="Phone">P:</abbr>
        (123) 456-7890
        <br>
        <abbr title="Email">E:</abbr>
        <a href="mailto:{{ $eventShow->owner }}">{{ $eventShow->owner }}</a>
      </address>
    </div>
  </div>
  <!-- /.row -->

<!-- /.row -->

<div class="row" >
  <div class="col-lg-8 my-6">
      <a class="btn btn-primary btn-lg" href="/show">Retour à la navigation</a>
    </div>
  </div>
</div>
    <!-- /.container -->
@endsection
