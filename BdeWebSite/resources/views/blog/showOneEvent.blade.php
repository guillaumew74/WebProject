@extends('template')

@section('contenu')
<div id="wrapper">
{{-- <header class="business-header"> --}}
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        {{-- <img class="img-fluid rounded" src="uploads/1kY0OHGElC.png" alt=""> --}}
        <h1 class="display-3 text-center mt-4">{{ $eventShow->title }}</h1>

          @if ($pics)
            @foreach ($pics as $pic)
            <img class="img-fluid rounded" src="{{ URL::asset($pic->ImageLink) }}" alt="">
            @endforeach
          @else

            <img class="img-fluid rounded" src="{{ URL::asset($eventShow->imageLink) }}" alt="">
          @endif
          @auth
          @if ($past)
          <a class="btn btn-primary btn-lg" class="btnedit" href="/addPicture/{{ $eventShow->idEvents }}">Ajouter des photos</a>

        @endif
        @endauth


      </div>

    </div>
  </div>
{{--     </header> --}}

<!-- Page Content -->
<div class="container">

  <div class="row">
    <div class="col-sm-7">
      <h2 class="mt-4">Description</h2>
      <p>{{ $eventShow->description }}</p>

      @auth {{-- vérifie si un user est authentifié --}}
      <div id="contleft">
      <a class="btn btn-primary btn-lg" onClick="newComment()" class="btnedit"><i class="far fa-comments" style="font-size:20px;color:white;"></i></a>

      <a href="/like/{{ $eventShow->idEvents }}" class="btn btn-primary" class="btnedit"><i class="far fa-thumbs-up" style="font-size:20px;color:white;"></i>{{ $eventShow->like }}</a>

      <a href="/suscribe/{{ $eventShow->idEvents }}" class="btn btn-primary btn-lg"></i>S'inscrire à cette événement</a>

      <a href="/getSuscribers/{{ $eventShow->idEvents }}" class="btn btn-primary btn-lg" class="btnedit">Liste des participants</a>


      <div style="display: none">{!! $userState = Auth::user()->state !!}</div>
      @if ($userState == 1)

      <a href="/signal/{{ $eventShow->idEvents }}" class="btn btn-danger btn-lg" class="btnedit">Signaler cette évenement</a>
    </div>
      @endif
    </div>
      @endauth

    </div>
    <div class="col-sm-4">
      <h2 class="mt-4">Informations sur l'événements</h2>
      @if($eventShow->payable  == 0)
      <p>L'événenement est gratuit !</p>
      @else
      <p>Le prix de participation de l'événement est de {{ $eventShow->payable }}</p>
      @endif
      @if($eventShow->recurent == '0')
      <p>Cette événement est unique et ce déroulera le {{ $eventShow->date }}</p>
      @else
      <p>Cette événement est {{ $eventShow->recurent }} et ce déroulera le {{ $eventShow->date }}</p>
      @endif
      <address>
        <abbr title="Email">Email:</abbr>
        <a href="mailto:{{ $eventShow->owner }}">{{ $eventShow->owner }}</a>
      </address>
    </div>
  </div>
  <!-- /.row -->
  <div class="row" id="cmrow">
   {{--  @if($comments->comments) --}}



      @for($i = 1; $i<=$nbrComment; $i++)
      <div class="col-lg-2 " id="comment">
    <h5>{{ $userName[$i]->lastName }}  {{ $userName[$i]->name }} </h5>
    <p>{{ $comments[$i]->created_at }}</p>
    <p>{{ $comments[$i]->comments }}</p>

    <div style="display: none">{!! $userState = Auth::user()->state !!}</div>
      @if ($userState == 1)
    <a href="/signal/{{ $comments[$i]->idComments }}" class="btn btn-danger btn-sm" class="btnedit">Supprimer ce commentaire</a>
    @endif

     </div>
    @endfor


   {{-- @endif --}}
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-8" id="divFormu">{{-- L'id permet d'activer la fct js qui affiche le formulaire apres le clique --}}
    {!! Form::open(array('action' => array('EventsController@showOneEventPost', $eventShow->idEvents))) !!}
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
      <a class="btn btn-primary btn-lg" href="/show" class="btnedit">Retour à la navigation</a>
    </div>
  </div>
</div>
    <!-- /.container -->

</div>
  <script src="{{ URL::asset('js/showOneEvent.js') }}"></script>


@endsection
