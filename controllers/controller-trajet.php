<?php
session_start();
require_once('../config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if (empty($_POST['date'])) {
        $errors['date'] = 'Veuillez saisir une date de trajet';
    }

    if (empty($_POST['traveltime'])) {
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
        $traveltime = $_POST['traveltime'];
        $distance = ($_POST["distance"]);
        $transport = $_POST['transport'];
        $id_user = $_SESSION['user']['id_utilisateur'];
        Trajet::create($date, $traveltime, $distance, $transport, $id_user);

        header("Location: controller-home.php");
        exit();
    }

}
include_once('../views/view-trajet.php');