<?php
include_once ('modele/Connexion_BDD.php');

if(!isset($_GET['section']) OR $_GET['section'] === 'commentaires')
{
  include_once ('controller/blog/commentaires.php');
}
