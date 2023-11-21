<?php
ob_start();

?>

<title>DK-CASSE | Accueil</title>

<body>
  <div class="header text-center position-relative">
    <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.5)"></div>
    <img src="public\images/banner.jpg" width="100%">
    <div class="titre header_texte position-absolute top-50 start-50 translate-middle">
      <h1 class="bienvenue display-2 fw-bold">Bienvenue sur DK-CASSE</h1>
      <p class="descbienvenue fs-3 fw-bold">Pièces d'occasion et pièce neuve</p>
    </div>
  </div>
  
  <h2 class="text-center fw-bold p-3"><u>Nos Services</u></h2>

  <div class="d-flex justify-content-center pb-5">
    <div class="row">
      <div class="card me-3" style="width: 18rem;">
        <img src="public\images/carrosserie.jpg" widht="100%" class="card-img-top" alt="Pièce Carrosserie">
        <div class="card-body">
          <h5 class="card-title">Pièce Carrosserie</h5>
          <p class="card-text">Vous retrouverez un large choix de pièces de carrosserie.</p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>

      <div class="card me-3" style="width: 18rem;">
        <img src="public\images/mecanique.jpg"  class="card-img-top" alt="Pièce Mécanique">
        <div class="card-body">
          <h5 class="card-title">Pièce Mécanique</h5>
          <p class="card-text">Vous retrouverez un large choix de pièces mécaniques.</p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>

      <div class="card me-3" style="width: 18rem;">
        <img src="public\images/electronique.jpg" class="card-img-top" alt="Pièce Électronique">
        <div class="card-body">
          <h5 class="card-title">Pièce Électronique</h5>
          <p class="card-text">Vous retrouverez un large choix de pièces électroniques.</p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>

      <div class="card me-3" style="width: 18rem;">
        <img src="public\images/vidange.jpg" class="card-img-top" alt="Pièce Vidange">
        <div class="card-body">
          <h5 class="card-title">Pièce Vidange</h5>
          <p class="card-text">Vous retrouverez un large choix de pièces pour votre vidange.</p>
          <a href="#" class="btn btn-primary">En savoir plus</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h2 class="text-center fw-bold p-3"><u>A propos</u></h2>
    <p>Bienvenue sur DK-Casse, votre source en ligne de pièces détachées automobiles de qualité. Trouvez rapidement les pièces dont vous avez besoin parmi notre vaste sélection. Notre équipe vérifie et teste chaque pièce pour assurer votre satisfaction. Faites confiance à DK-Casse pour des pièces fiables et une expérience d'achat pratique.</p>
  </div>
</body>

<?php
$content = ob_get_clean();
require 'template.php';
?>
