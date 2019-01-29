@extends('templatelog')

@section('contenu')
<div id="wrapper">
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-default bg-default">
			<div class="panel-heading">Contactez le BDE</div>
			<div class="panel-body">
				{!! Form::open(['url' => 'contact']) !!}
					<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
						{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
						{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
						{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
						{!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-primary pull-right']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
