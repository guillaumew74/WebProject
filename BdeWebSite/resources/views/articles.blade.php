{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('quantity', 'Quantity:') !!}
			{!! Form::text('quantity') !!}
		</li>
		<li>
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		</li>
		<li>
			{!! Form::label('imageLink', 'ImageLink:') !!}
			{!! Form::text('imageLink') !!}
		</li>
		<li>
			{!! Form::label('categorie', 'Categorie:') !!}
			{!! Form::text('categorie') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}