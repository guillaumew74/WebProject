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
      <a class="btn btn-primary btn-lg" id="btnComment"><i class="far fa-comments" style="font-size:40px;color:white;"></i>Commente</a>
      <a href="/like/{{ $eventShow->idEvents }}" class="btn btn-primary"><i class="far fa-thumbs-up" style="font-size:40px;color:white;"></i>Like {{ $eventShow->like }}</a>
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
  <div class="row">
   {{-- @if($comments->comments) --}}
   <div class="col-lg-2 " id="comment">
    @foreach ($comments as $comment)

    <p>{{ $comment->comments }}</p>


    @endforeach
    </div>
  {{-- @endif --}}
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-8" id="divFormu">{{-- L'id permet d'activer la fct js qui affiche le formulaire apres le clique --}}
    {!! Form::open(array('action' => array('EventsController@showOne', $eventShow->idEvents))) !!}
    <div class="form-group {!! $errors->has('comments') ? 'has-error' : '' !!}">
      {!! Form::textarea ('comments', null, ['class' => 'form-control', 'placeholder' => 'Votre commentaire:']) !!}
      {!! $errors->first('comments', '<small class="help-block">:message</small>') !!}
    </div>
    {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>


<div class="row" >
  <div class="col-lg-8 my-6">
      <a class="btn btn-primary btn-lg" href="/show">Retour à la navigation</a>
    </div>
  </div>
</div>
    <!-- /.container -->



  {{-- peut afficher 3 autres event --}}
{{--       <div class="row">
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/300x200" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
      --}}



    @endsection
