<?php
session_start();

require_once('../models/user.php');



if (!isset($_SESSION['user']['id_utilisateur'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    $redirectController = 'controller-signin.php';
    header("Location: " . $redirectController);
    exit();
}

$dateDuJour = date("d-m-Y");

include_once '../views/view-home.php';

