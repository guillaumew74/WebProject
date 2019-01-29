<!--correspond au formulaire pour soumettre des idées-->
@extends('templateuser')

@section('contenu') <!--Voici le formulaire d'enregistrement d'événement-->
@auth
   <div class="col-sm-offset-3 col-sm-6">
    <br>
    <br>
      <div class="panel panel-info">
         <div class="panel-heading">Soumetre son idée <i class="fas fa-calendar"></i></div>
         <div class="panel-body">

            {!! Form::open(array('url' => '/post', 'files' => true)) !!}
               <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Le nom de l\'événement']) !!}
                  {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
               </div>

               <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                  {!! Form::textarea ('description', null, ['class' => 'form-control', 'placeholder' => 'Description de l\'événement']) !!}
                  {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
               </div>
               <div class="form-group {!! $errors->has('date') ? 'has-error' : '' !!}">
                  {!! Form::date ('date', null, ['class' => 'form-control']) !!}
                  {!! $errors->first('date', '<small class="help-block">:message</small>') !!}
               </div>
               <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                  {!! Form::file('image', ['class' => 'form-control']) !!}
                  {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
               </div>
               <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                  {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
                  {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
               </div>
               <div class="form-group form-control-sm{!! $errors->has('isRecurent') ? 'has-error' : '' !!}">
                  {!! Form::label('isRecurent', 'Est-ce un événement récurent ?') !!}
                  {!! Form::checkbox('isRecurent', '1', false) !!}
                  {!! $errors->first('isRecurent', '<small class="help-block">:message</small>') !!}
               </div>
               <div class="form-control form-control-sm {!! $errors->has('recurent') ? 'has-error' : '' !!}" id="typeRecurent">

                  {!! Form::label('recurent', 'Quelle est sa périodicité ?') !!}
                  {!! Form::radio('recurent', 'quotidien', true )  !!} Quotidien
                  {!! Form::radio('recurent', 'mensuel', false) !!} Mensuel
                  {!! Form::radio('recurent', 'annuel', false) !!} Annuel
                  {!! $errors->first('recurent', '<small class="help-block">:message</small>') !!}
               </div>
               <div class="form-group {!! $errors->has('payable') ? 'has-error' : '' !!}">
                  {!! Form::label('payable', 'Quel est le coût de participation à l\'événement ? (Gratuit = 0)') !!}
                  {!! Form::number('payable', 'amount', ['class' => 'form-control']) !!}
                  {!! $errors->first('payable', '<small class="help-block">:message</small>') !!}
               </div>
               {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
            {!! Form::close() !!}
         </div>
      </div>
   </div>
   <script src="{{ URL::asset('js/formEvent.js') }}"></script>
   @endauth
   @guest

   <div class="col-sm-offset-4 col-sm-4">
    <br>
    <br>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Il y a un problème !</h3>
      </div>
      <div class="panel-body">
        <p>Vous devez être connecté pour proposer une idée d'événement</p>
        <a href="/">Retour au Menu</a>
      </div>
    </div>
  </div>
  @endguest
@endsection
