<?php ob_start() ?>
<?php session_start() ?>
<div class="d-flex ">
<button type="button" class="btn btn-secondary ms-5 me-3 px-5">Home</button>
<div class="d-flex justify-content-center col-9">
<h2 class="ms-5 ">Ajouter des données</h2>
</div>
</div>
<form class="container mt-5 perso" action="session.php" method="POST">
<div>
  <label for="prenom" class="form-label">Prénom :</label>
  <input type="text" class="form-control" placeholder="Prénom"  name="firstname">
</div>
<div class="mb-3">
  <label for="age" class="form-label">Nom :</label>
  <input type="text" class="form-control"  placeholder="Nom" name="name">
</div>
<div class="mb-3">
  <label for="age" class="form-label">Age(18 à 70 ans) :</label>
  <input type="number" class="form-control"  placeholder="Votre age" name="age">
</div>
<div class="form-group">
  <label class="form-label mt-4"></label>
  <div class="form-group">
    <div class="input-group mb-3">
      <span class="input-group-text">Taille(1.26m à 3m)</span>
      <input  type="number" onchange="setTwoNumberDecimal" min="0" max="10" step="0.01" value="0.00" class="form-control"placeholder="Votre taille" name="taille">
      <span class="input-group-text">m</span>
    </div>
    <fieldset class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="Homme" checked="">
        <label class="form-check-label" for="optionsRadios1">
          Homme
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="Femme">
        <label class="form-check-label" for="optionsRadios2">
          Femme
        </label>
      </div>
<input class="mt-4 btn btn-primary" type="submit" value="Envoyer">
</form>

<?php
$content = ob_get_clean();
require "template.php";

?>