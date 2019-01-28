@extends('templateuser')


@section('contenu')

    <br>

    <div class="col-sm-offset-3 col-sm-6">

        <div class="panel panel-success">

            <div class="panel-heading">Achat validé</div>

            <div class="panel-body">

               <p>Votre {{$article->name}} a bien été ajouté(e) au panier</p>

        <a href="/boutique">Retour a la boutique</a>
            </div>

        </div>
    </div>

@endsection