<!DOCTYPE html>

<html lang="fr">

<head>

  <meta charset="utf-8">

</head>

<body>

  <h2>BDE SHOP</h2>

  <p>Récapitulatif de votre commande sur le shop du BDE :</p>

<?php $i=0 ?>

  @foreach ($contents2 as $content)

 <?php $i++ ?>

  <p> <strong>Element n°{{ $i }}</strong></p>

  <p> Nom : {{ $content->name }} </p>
  <p> Prix : {{ $content->price }} € </p>
  <p> Categorie : {{ $content->categorie }} </p>
  <br>
  

  @endforeach

</body>

</html>