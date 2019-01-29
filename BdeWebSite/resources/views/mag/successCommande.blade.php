@extends('templateuser')


@section('contenu')

<br>



@unless (Auth::check())
<div class="col-sm-offset-3 col-sm-6">

	<div class="panel panel-danger">

		<div class="panel-heading">Erreur de validation</div>

		<div class="panel-body">

			Vous devez vous connecter pour ajouter un élément à votre panier.
			
			<br>

			<a href="/login">Connectez-vous</a>
		</div>

	</div>
</div>
@endunless


@auth
<div class="col-sm-offset-3 col-sm-6">

	<div class="panel panel-success">

		<div class="panel-heading">Achat validé</div>

		<div class="panel-body">

			<p>Votre commande a bien été passée au près du BDE Cesi</p>

			<a href="/boutique">Retour a la boutique</a>
			
		</div>

	</div>
</div>
@endauth

@endsection