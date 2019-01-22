@extends('templateuser')

@section('contenu')
  <div class="col-sm-offset-4 col-sm-4">
    <br>
    <div class="panel panel-primary">
      <div class="panel-heading">Création d'un utilisateur</div>
      <div class="panel-body">
        <div class="col-sm-12">
          {!! Form::open(['route' => 'user.store', 'class' => 'form-horizontal panel']) !!}
          <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="form-group {!! $errors->has('lastName') ? 'has-error' : '' !!}">
            {!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Prénom']) !!}
            {!! $errors->first('lastName', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
            {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="form-group">
            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']) !!}
          </div>

          <div class="form-group row">
        <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('location') }}</label>
        <div class="col-md-6">
            <p>
       <select id="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required autofocus>
           <option value="Aix-en-Provence">Aix-en-Provence</option>
           <option value="Angoulême">Angoulême</option>
           <option value="Arras">Arras</option>
           <option value="Bordeaux">Bordeaux</option>
           <option value="Brest">Brest</option>
           <option value="Caen">Caen</option>
           <option value="Châteauroux">Châteauroux</option>
           <option value="Dijon">Dijon</option>
           <option value="Grenoble">Grenoble</option>
           <option value="La Rochelle">La Rochelle</option>
           <option value="Le Mans">Le Mans</option>
           <option value="Lille">Lille</option>
           <option value="Lyon">Lyon</option>
           <option value="Montpellier">Montpellier</option>
           <option value="Nancy">Nancy</option>
           <option value="Nantes">Nantes</option>
           <option value="Nice">Nice</option>
           <option value="Orléans">Orléans</option>
           <option value="Paris Nanterre">Paris Nanterre</option>
           <option value="Pau">Pau</option>
           <option value="Reims">Reims</option>
           <option value="Rouen">Rouen</option>
           <option value="Saint-Nazaire">Saint-Nazaire</option>
           <option value="Strasbourg">Strasbourg</option>
           <option value="Toulouse">Toulouse</option>

       </select>
   </p>
                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
</div>
</div>
          <div class="form-group">
          <div class="checkbox">
              <label>
                {!! Form::checkbox('state', 2) !!}Administrateur
              </label>
            </div>

              <div class="checkbox">
              <label>
                {!! Form::checkbox('state', 1) !!}Cesi
              </label>

              <div class="checkbox">
              <label>
                {!! Form::checkbox('state', 0) !!}User
              </label>
            </div>
          </div>
          {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <a href="javascript:history.back()" class="btn btn-primary">
      <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>
  </div>
@endsection



