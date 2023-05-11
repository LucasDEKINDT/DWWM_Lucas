<?php ob_start() ?>
<div class=" row row-cols-1 row-cols-md-2 g-4 container-fluid">
                <div class="col ">
                    <div class="card bg-dark text-light mb-5 ">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4">Exercice n°1</h5>
                            <img src="./image/romain.png" alt="romain" height="50px">
                            <p class="card-text pt-4">L'exercise permet de convertire un chiffre en chiffre Romain</p>
                            <a href="./romain/convert.php" class="btn btn-outline-light mb-5">convert</a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card bg-warning text-dark mb-5">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4">Exercice n°2</h5>
                            <img src="./image/utilisateur.png" alt="utilisateur" height="50px">
                            <p class="card-text pt-4">L'exercise permet ce connecter avec un e-mail et un mdp  </p>
                            <a href="./REGEX/Page d'authetification.php" class="btn btn-outline-light mb-5">Regex</a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card bg-primary text-light mb-5 ">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4">Exercice n°3 </h5>
                            <img src="./image/session.png" alt="session" height="50px">
                            <p class="card-text pt-4">L'exercise permet de remplir un formulaire et de faire des exos dessus </p>
                            <a href="./SESSION/formulaire.php" class="btn btn-outline-light mb-5">SESSION</a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card bg-light text-dark mb-5 ">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4"> Exercice n°4 </h5>
                            <img src="./image/traducteur.png" alt="traducteur" height="50px">
                            <p class="card-text pt-4">L'exercise permet de changer de langue sur un site </p>
                            <a href="./traducteur/traducteur.php" class="btn btn-outline-dark mb-5">traducteur</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" row row-cols-1 row-cols-md-2 g-4 container-fluid">
                <div class="col ">
                    <div class="card bg-dark text-light  mb-5">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4">Exercice n°5</h5>
                            <img src="./image/calculatrice.png" alt="calculatrice" height="50px">
                            <p class="card-text pt-4">L'exercise permet d'utiliser une calculatrice</p>
                            <a href="./calc/calculatrice.php" class="btn btn-outline-light mb-5">calculatrice</a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card bg-warning text-dark  mb-5">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4">Exercice n°6</h5>
                            <img src="./image/cookie.png" alt="cookie" height="50px">
                            <p class="card-text pt-4">L'exercise permet de voir comment les cookies fonctionne</p>
                            <a href="./cookie/cookie.php" class="btn btn-outline-light mb-5">Cookie</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col ">
                    <div class="card bg-primary text-light mb-5 ">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4"> Best support 2019/2020</h5>
                            <img src="./images/emojione-v1_white-touch-tone-phone.png" alt="cup">
                            <p class="card-text pt-4">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <a href="./SESSION/formulaire.php" class="btn btn-outline-light mb-5">calculatrice</a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col ">
                    <div class="card bg-light text-dark  mb-5">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4"> Groundbreaking low <br> prices</h5>
                            <img src="./images/solar_cup-first-bold.png" alt="cup">
                            <p class="card-text pt-4">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-outline-dark mb-5">look at the ranking</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>






<?php
$content = ob_get_clean();
require "template.php";







?>