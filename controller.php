<?php
switch( $action )
 {
    case'reponse':
 {
        // var_dump( $_REQUEST );
        $liste = $_REQUEST[ 'liste' ];
        $horoscope = getLeSigne($liste);
        include 'reponse.php';
        break;
    }
    case'connexion':
    {
        // deonnées provenant du formulaire
        $login = $_REQUEST['login'];
        $mdp = $_REQUEST['mdp'];
        // test la validité de la connexion

       $flag=getConnexion($login, $mdp);

       //  orienter l'affichage
       if($flag){
        $signe = getLessignes();
        include 'choix.php';
       }
       else{
        include 'connexion.php';
       }

        break;
    }
    case 'modifier' :
        {
            $signe = getLesSignes();
            include 'administration.php';
            break ;
        }
    case 'administrer' : 
        {
        var_dump($_REQUEST);
        foreach ($_REQUEST as $k => $v){
            if (isset($signe[$k])) $signe[$k] = $v;
        }
        include 'choix.php'; }
    default:
 {
        include 'connexion.php';
    }
}