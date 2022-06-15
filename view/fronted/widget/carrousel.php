<?php 


    $eventsManager = new eventsManager();

    $today = date("Y-m-d");

    $reqCarrousel = $eventsManager->getEvents('present',"","","",$today,"","");

    $dataCarrousel = $reqCarrousel->fetchAll();

    $compteur = 0;

    echo'

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">




    ';


    foreach ($dataCarrousel as $elementCarrousel)
    {


      $etatElement = ($compteur == 0) ? "active" : "";


    echo'

      <li data-bs-target="#myCarousel" data-bs-slide-to="'.$compteur.'" class="'.$etatElement.'"></li>


    ';

      $compteur ++;


    }


    echo'

    </ol>

    <div class="carousel-inner">






    ';


    $compteur = 0;


    foreach ($dataCarrousel as $elementCarrousel)
    {

      $compteur ++;

      $etatElement = ($compteur == "1") ? "active" : "";


    echo'

            <div class="carousel-item '.$etatElement.'">

        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="white"/></svg>

        <div style="margin-top: 100px;" class="container">
          <div class="carousel-caption">
            <h1 style="color:black;">'.$elementCarrousel['nom'].'</h1>
            <h3 style="color:black;">'.$elementCarrousel['debut'].'</h3>
            <br>
            <p><a class="btn btn-lg btn-primary" href="index.php?action=event&identifiant=' . $elementCarrousel['identifiant'] . '" role="button">Allez!</a></p>
          </div>
        </div>

      </div>


    ';


    }



    echo'

    </div>

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>

      <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>

    </div>


    ';







?>

