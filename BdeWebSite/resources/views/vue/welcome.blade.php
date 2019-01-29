@extends('template')

@section('contenu')

<div class="wrapper">
        <!-- Page Content -->
        <div class="page-content-wrapper">
            <div class="container-fluid">
                <h1>Bde Web Site CESI</h1>
                <h2>Présentation <br></h2>

            <p><strong>Bonjour à toi CESIEN(E)!</strong></p>

            <p>Bienvenue sur le site du bureau des élèves de l'école CESI de Lyon !<br></p>
            <p>Découvrez tous les évenements et la boutique qui font du CESI Lyon l'un des plus actifs parmis les écoles d'ingénieurs.<br></p>
            <p>Rejoins nos évenements afin de participer à l'expansion de la vie étudiante au CESI.<br></p>
            <p>Afin de vous mettre en valeurs, nous vous proposons de proposer vos évenements, qui seront voter par les autres membres du CESI, puis réaliser si une majorité l'aura liker, donc
            n'attends pas et viens nous proposer ton évenement !<br></p>
            <p>Le site est organisé en différentes catégories pour faciliter la navigation, mais si tu as une question tu peux nous contacter ou encore venir directement dans ton BDE.<br></p>

            <p><strong>À très vite !</strong></p>

            </div>
        </div>
        <!-- /#page-content-wrapper -->
        <div class="page-content-wrapper">
            <h2>Informations Pratiques<br></h2>
            <table class="table table-hover">
                        <tbody>
                            <tr>
                                 <th scope="row"></th>
                                <td>Adresse </td>
                                <td>Téléphone </td>
                                <td>Les horaires</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Campus CESI LYON <br>Adresse : 19 Avenue Guy de Collongue, 69130 Écully</td>
                                <td>04 72 18 89 89</td>
                                <td>Horaires d'ouverture  du lundi au vendredi de 8h00 à 18h00</td>
                            </tr>

                        </tbody>
            </table>
  </div>
<section id="carousel" >
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Bibliothèque d'images</h2>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                 <img class="d-block w-100" src="/img/img1.jpg" alt="slide 1">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="/img/img2.jpg" alt="slide 2">
                 </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="/img/img3.jpg" alt="slide 3">
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="/img/img4.jpg" alt="slide 4">
                  </div>
              </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </div>
</section>
</div>

@endsection

