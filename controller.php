<?php
switch($action)
{
    case'reponse':
{
   // var_dump($_REQUEST);
    $liste = $_REQUEST['liste'];
    include 'reponse.php';
    break;
}
default:
{ include 'choix.php';}
}