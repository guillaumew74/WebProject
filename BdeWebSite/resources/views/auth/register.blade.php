@extends('templatelog')

@section('contenu')
<div class="container" style="margin-left: 15%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('S\'enregistrer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
        <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Centre') }}</label>
        <div class="col-md-6">
            <p>
       <select id="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" required>
          <option value="">--choisisez une option--</option>
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

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

              <div class="form-group row">
               <label><input type="checkbox" name="valid" required>  En cochant, j'accepte<a href="/condition">les conditions d'utilisation.</a></label>
              </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('S\'enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
