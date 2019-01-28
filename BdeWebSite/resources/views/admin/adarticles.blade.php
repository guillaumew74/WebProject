@extends('templateuser')

@section('contenu')
<div id="wrapper">
    <br>
  <div class="col-sm-offset-3 col-sm-6">
    <div class="panel panel-default bg-default">
      <div class="panel-heading">Ajout d'article </div>
      <div class="panel-body">

        {!! Form::open(['url' => '/adarticles']) !!}
          <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom Articles']) !!}
            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="form-group {!! $errors->has('quantity') ? 'has-error' : '' !!}">
            {!! Form::text('quantity', null, ['class' => 'form-control', 'placeholder' => 'Quantité']) !!}
            {!! $errors->first('quantity', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="form-group {!! $errors->has('price') ? 'has-error' : '' !!}">
            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Prix']) !!}
            {!! $errors->first('price', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="form-group {!! $errors->has('imageLink') ? 'has-error' : '' !!}">
            {!! Form::text('imageLink', null, ['class' => 'form-control', 'placeholder' => 'lien image']) !!}
            {!! $errors->first('imageLink', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="form-group {!! $errors->has('Categorie') ? 'has-error' : '' !!}">
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
            {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="form-group {!! $errors->has('Categorie') ? 'has-error' : '' !!}">
            {!! Form::text('categorie', null, ['class' => 'form-control', 'placeholder' => 'Catégorie']) !!}
            {!! $errors->first('categorie', '<small class="help-block">:message</small>') !!}
          </div>

          {!! Form::submit('Envoyer !', ['class' => 'btn btn pull-right']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection
