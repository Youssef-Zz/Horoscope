<?php
switch ($action)
{
    case 'reponse':
        $poids=$_REQUEST['poids'];
        $taille=$_REQUEST['taille'];
        $imc=$poids/($taille*$taille/10000);


        include"views/reponse.php";
        break;
    default:
        include 'views/choix.php';
}