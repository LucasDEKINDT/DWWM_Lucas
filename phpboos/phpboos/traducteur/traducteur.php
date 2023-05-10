<?php ob_start() ?>
<?php session_start() ?>
<form id='frm' name='frm' method='post' action='traducteur.php'class="d-flex justify-content-center" >
<button name='btn1' value='btn1' class=" border-0 bg-white" >
    <img  src="./image/france.png" alt="" height="50px" type='submit' name='btn1' value='btn1' >
    </button>
    <button name='btn2' value='btn2' class=" border-0 bg-white" >
    <img src="./image/anglais" alt="" height="50px">
    </button  >
    <button name='btn3' value='btn3' class=" border-0 bg-white" >
    <img src="./image/espagnol" alt="" height="50px">
    </button>
</form>

<?php
$action = '';
if (isset($_POST['btn1'])) $action = 'action1';
elseif (isset($_POST['btn2'])) $action = 'action2';
elseif (isset($_POST['btn3'])) $action = 'action3';

switch($action){
    case "action1":
        echo "<h2 class='text-center'>  Bienvenue sur mon site web </h2> <br> <p class='text-center'> J'ai crée ce site pour vous montrez mon savoir </p>";
        break;
        case "action2":
            echo "<h2 class='text-center'>  Welcome to my website </h2> <br> <p class='text-center'> I have created this site to show you my knowledge </p>";
            break;
            case"action3":
                echo "<h2 class='text-center'>  Bienvenido a mi sitio web </h2 > <br> <p class='text-center'> He creado este sitio para mostrarle mis conocimientos </p>";
                break;

}



?>
<?php
$content = ob_get_clean();
require "template.php";

?>