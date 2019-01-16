{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('owner', 'Owner:') !!}
			{!! Form::text('owner') !!}
		</li>
		<li>
			{!! Form::label('date', 'Date:') !!}
			{!! Form::text('date') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('validated', 'Validated:') !!}
			{!! Form::text('validated') !!}
		</li>
		<li>
			{!! Form::label('imageLink', 'ImageLink:') !!}
			{!! Form::text('imageLink') !!}
		</li>
		<li>
			{!! Form::label('vote', 'Vote:') !!}
			{!! Form::text('vote') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}