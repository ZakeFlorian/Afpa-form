<?php
session_start();
require_once('../config.php');
if (!isset($_SESSION['user']['id_utilisateur'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    $redirectController = 'controller-signin.php';
    header("Location: " . $redirectController);
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if (empty($_POST['date'])) {
        $errors['date'] = 'Veuillez saisir une date de trajet';
    }

    if (empty($_POST['traveltime_trajet'])) {
        $errors['traveltime'] = 'Veuillez saisir une durée de trajet';
    }
    if (empty($_POST['distance'])) {
        $errors['distance'] = 'Veuillez saisir une distance de trajet';
    }
    if (!isset($_POST["transport"])) {
        $errors["transport"] = "Veuillez selectionner un mode de transport";
    }
    if (empty($errors)) {
        require_once '../models/trajet.php';
        $date = ($_POST['date']);
        $traveltime = $_POST['traveltime_trajet'];
        $distance = ($_POST["distance"]);
        $transport = $_POST['transport'];
        $id_user = $_SESSION['user']['id_utilisateur'];
        Trajet::create($date, $distance, $traveltime, $transport, $id_user);

        header("Location: controller-historique.php");
        exit();
    }

}
include_once('../views/view-trajet.php');