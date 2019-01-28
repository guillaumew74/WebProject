<!--correspond au formulaire pour soumettre des idées-->
@extends('templateuser')

@section('contenu') <!--Voici le formulaire d'enregistrement d'événement-->

   <div class="col-sm-offset-3 col-sm-6">
    <br>
    <br>
      <div class="panel panel-info">
         <div class="panel-heading">Soumetre son idée</div>
         <div class="panel-body">

            {!! Form::open(array('action' => ['EventsController@postPicture', $id], 'files' => true)) !!}

               <div class="form-group {!! $errors->has('picture1') ? 'has-error' : '' !!}">
                  {!! Form::file('picture1', ['class' => 'form-control']) !!}
                  {!! $errors->first('picture1', '<small class="help-block">:message</small>') !!}
               </div>

                <div class="form-group {!! $errors->has('picture2') ? 'has-error' : '' !!}">
                  {!! Form::file('picture2', ['class' => 'form-control']) !!}
                  {!! $errors->first('picture2', '<small class="help-block">:message</small>') !!}
               </div>
                <div class="form-group {!! $errors->has('picture3') ? 'has-error' : '' !!}">
                  {!! Form::file('picture3', ['class' => 'form-control']) !!}
                  {!! $errors->first('picture3', '<small class="help-block">:message</small>') !!}
               </div>

               {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
            {!! Form::close() !!}
         </div>
      </div>
   </div>


@endsection
