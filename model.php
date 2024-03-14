<?php
include 'data.php' ;
// elle verifie les identifiants de connexion
function getConnexion($login, $password){
    $connexion=connexion();
    $flag=false;
    foreach($connexion as $login => $mdp){
 
    
        if($login == $login && $password == $mdp)
        {
            $flag=true;
        }
       }
       return $flag;
}
// il renvoie tout les signes
function getLesSignes() {
    $signe=signe();
    return $signe;
}
// retourne l'horoscope pour un signe donné
function getLeSigne($choix) {
    $signe=signe();
    return $signe[$choix];
}