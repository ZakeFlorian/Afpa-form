<?php
session_start();
var_dump($_SESSION);
require_once '../config.php';
require_once '../models/trajet.php';
$trajetInfos = Trajet::getAllTrajets($_SESSION['user']['id_utilisateur']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $id_trajet = isset($_POST['id_trajet']) ? intval($_POST['id_trajet']) : 0;


    if ($id_trajet > 0) {


        Ride::deleteTrajet($id_trajet);
    }
}



include_once '../views/view-historique.php';






























include_once('../views/view-historique.php');