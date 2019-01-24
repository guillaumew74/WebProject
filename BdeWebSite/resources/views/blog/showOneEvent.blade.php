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
    <div class="col-sm-7">
      <h2 class="mt-4">What We Do</h2>
      <p>{{ $eventShow->description }}</p>

      @auth {{-- vérifie si un user est authentifié --}}
      <a class="btn btn-primary btn-lg" onClick="newComment()"><i class="far fa-comments" style="font-size:20px;color:white;"></i>Commente</a>

      <a href="/like/{{ $eventShow->idEvents }}" class="btn btn-primary"><i class="far fa-thumbs-up" style="font-size:20px;color:white;"></i>Like {{ $eventShow->like }}</a>

      <a href="/suscribe/{{ $eventShow->idEvents }}" class="btn btn-primary btn-lg"><i class="far fa-caret-right" style="font-size:20px;color:white;"></i>Suscribe to this event</a>

      <a href="/getSuscribers/{{ $eventShow->idEvents }}" class="btn btn-primary btn-lg">Télécharger la liste des participants</a>

      @endauth

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
   {{--  @if($comments->comments) --}}

    @foreach ($comments as $comment)
      <div class="col-lg-2 " id="comment">
    <p>{{ $comment->comments }}</p>

      </div>
    @endforeach

   {{-- @endif --}}
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-8" id="divFormu">{{-- L'id permet d'activer la fct js qui affiche le formulaire apres le clique --}}
    {!! Form::open(array('action' => array('EventsController@showOnePost', $eventShow->idEvents))) !!}
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


  <script src="{{ URL::asset('js/showOneEvent.js') }}"></script>
    @endsection
