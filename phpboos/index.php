<?php ob_start() ?>
<div class=" row row-cols-1 row-cols-md-2 g-4 container-fluid">
                <div class="col ">
                    <div class="card bg-dark text-light ">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4">Best hosting Award <br> 2022</h5>
                            <img src="./images/solar_cup-first-bold.png" alt="cup">
                            <p class="card-text pt-4">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <a href="convert.php" class="btn btn-outline-light mb-5">convert</a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card bg-warning text-dark ">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4">Fastest servers</h5>
                            <img src="./images/ph_wind-thin.png" alt="cup">
                            <p class="card-text pt-4">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <a href="Page d'authetification.php" class="btn btn-outline-light mb-5">page a</a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card bg-primary text-light  ">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4"> Best support 2019/2020</h5>
                            <img src="./images/emojione-v1_white-touch-tone-phone.png" alt="cup">
                            <p class="card-text pt-4">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <a href="calculatrice.php" class="btn btn-outline-light mb-5">calculatrice</a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card bg-light text-dark ">
                        <div class="card-body">
                            <h5 class="card-title fs-1 pt-4"> Groundbreaking low <br> prices</h5>
                            <img src="./images/solar_cup-first-bold.png" alt="cup">
                            <p class="card-text pt-4">This is a longer card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-outline-dark mb-5">look at the ranking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>







<?php
$content = ob_get_clean();
require "template.php";







?>