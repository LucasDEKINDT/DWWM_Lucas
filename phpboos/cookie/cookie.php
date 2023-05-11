<?php ob_start() ?>
<?php session_start() ?>
<div class=" d-flex justify-content-center">
<h1 >Les cookies  <img src="./image/cookie.png" alt="cookie" height="50px"> </h1>
</div>
<div>
<form id='frm' name='frm' method='post' action='cookie.php'class="d-flex justify-content-center" >
    <h5>langues :</h5>
    <select name="try" id="try" class="ms-3 pb-2 h-25"> 
    <option >langues</option>    
  <option value="Français" name="français">Français</option>  
  <option value="Anglais" name="anglais">Anglais</option>  
  <option value="Espagnol" name="espagnol">Espagnol</option> 
</select> 
<input class="ms-3 bg-success h-25" type="submit" value=sauvegarde>

</div>
</form>
<?php
if(isset($_COOKIE['langue'])){
    if(isset($_POST['try'])){
$action = '';

$action=$_POST['try'];  


switch($action){
    case "Français":
         include "français.php";
         setcookie("langue","français",time()+3600,"/","",false,true);
        break;
        case "Anglais":
              include "anglais.php";
              setcookie("langue","anglais",time()+3600,"/","",false,true);
            break;
            case"Espagnol":
                include "espagnol.php";
                setcookie("langue","espagnol",time()+3600,"/","",false,true);
                break;
                default:
                include "français.php";
                break;

}
    
}

else{
    include "./".$_COOKIE['langue'].".php";
}
}
else{
setcookie('langue', 'fr', time()+3600, '/', '', false, true);
include "français.php";
}
?>

<?php
$content = ob_get_clean();
require "template.php";

?>