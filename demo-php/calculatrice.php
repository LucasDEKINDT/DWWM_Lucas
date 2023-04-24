<?php
$somme=0;
$nb1=readline("entrez nombre");
$nb2=readline("entrez nombre");
$opr=readline("quelle operation voulez vous ");
switch($opr){
    case"+":
        $somme=$nb1+$nb2;
        echo "le resultat est : ".$somme;
        break;
        case"-":
            $somme=$nb1-$nb2;
            echo "le resultat est :".$somme;
            break;
            case"*":
                $somme=$nb1*$nb2;
                echo "le resultat est :".$somme;
                break;
                case"/":
                    
                    $somme=$nb1/$nb2;
                    echo " le resultat est :".$somme;
                    break;
                    case"%":
                        $somme=$nb1%$nb2;
                        echo "le resultat est :".$somme;
                        break;
                        default:
                        echo "essaye encore";


        
}