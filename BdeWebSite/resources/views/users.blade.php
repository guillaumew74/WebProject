{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('Name', 'Name:') !!}
			{!! Form::text('Name') !!}
		</li>
		<li>
			{!! Form::label('lastName', 'LastName:') !!}
			{!! Form::text('lastName') !!}
		</li>
		<li>
			{!! Form::label('location', 'Location:') !!}
			{!! Form::text('location') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::label('remember_token', 'Remember_token:') !!}
			{!! Form::text('remember_token') !!}
		</li>
		<li>
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state') !!}
		</li>
		<li>
			{!! Form::label('created_at', 'Created_at:') !!}
			{!! Form::text('created_at') !!}
		</li>
		<li>
			{!! Form::label('updated_at', 'Updated_at:') !!}
			{!! Form::text('updated_at') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}