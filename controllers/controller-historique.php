<?php
session_start();

require_once '../config.php';
require_once '../models/trajet.php';
$AllTrajets = Trajet::getAllTrajets($_SESSION['user']['id_utilisateur']);




















include '../views/view-historique.php';