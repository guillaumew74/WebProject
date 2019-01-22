<!--correspond au formulaire pour soumettre des idées-->
@extends('templateForm')

@section('contenu') <!--Voici le formulaire d'enregistrement d'événement-->
    <br>
   <div class="col-sm-offset-3 col-sm-6">
      <div class="panel panel-info">
         <div class="panel-heading">Soumetre son idée</div>
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
               {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
            {!! Form::close() !!}
         </div>
      </div>
   </div>
@endsection
