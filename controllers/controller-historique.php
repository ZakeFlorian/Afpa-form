<?php
session_start();

require_once '../config.php';
require_once '../models/trajet.php';

if (!isset($_SESSION['user']['id_utilisateur'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    $redirectController = 'controller-signin.php';
    header("Location: " . $redirectController);
    exit();
}

$trajetInfos = Trajet::getAllTrajets($_SESSION['user']['id_utilisateur']);

// Vérifier si la requête est de type POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si 'id_trajet' est défini dans la requête POST
    $id_trajet = isset($_POST['id_trajet']) ? intval($_POST['id_trajet']) : 0;

    // Vérifier si $id_trajet est supérieur à 0
    if ($id_trajet > 0) {
        // Supprimer le trajet
        Trajet::deleteTrajet($id_trajet);
        header("Location: controller-historique.php");
        exit();
    }
}

// Afficher les informations de session à des fins de débogage
var_dump($_SESSION);


include_once '../views/view-historique.php';



