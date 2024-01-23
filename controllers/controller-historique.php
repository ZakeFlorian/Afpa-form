<?php
session_start();
var_dump($_SESSION);
require_once '../config.php';
require_once '../models/trajet.php';
$trajetInfos = Trajet::getAllTrajets($_SESSION['user']['id_utilisateur']);
var_dump($trajetInfos);



































include_once('../views/view-historique.php');