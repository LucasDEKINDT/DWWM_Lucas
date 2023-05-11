<?php ob_start() ?>
<?php session_start() ?>
<h1 class="text-center">Traducteur  <img src="./image/traducteur.png" alt="romain" height="50px"></h1>
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
<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dicta fugiat expedita mollitia minus amet soluta, ducimus porro voluptatem maiores quos dignissimos incidunt aliquam aliquid fuga. Nam quidem eveniet nihil!
Sunt praesentium officiis, alias veritatis enim vero ducimus, dolorum saepe ab earum vitae, rerum consectetur optio error doloribus dolorem nobis odio hic? Exercitationem aliquid cumque commodi fugiat magni officiis aut?
Reprehenderit enim, cupiditate eveniet at accusamus </h3>
<?php
$action = '';
if (isset($_POST['btn1'])) $action = 'action1';
elseif (isset($_POST['btn2'])) $action = 'action2';
elseif (isset($_POST['btn3'])) $action = 'action3';

switch($action){
    case "action1":
         include "français.php";
        break;
        case "action2":
              include "anglais.php";
            break;
            case"action3":
                include "espagnol.php";
                break;
                default:
                include "français.php";
                break;

}



?>
<?php
$content = ob_get_clean();
require "template.php";

?>