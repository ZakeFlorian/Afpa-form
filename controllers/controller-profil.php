<?php

session_start();
require_once('../config.php');
require_once('../models/user.php');

if (!isset($_SESSION['user']['id_utilisateur'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    $redirectController = 'controller-signin.php';
    header("Location: " . $redirectController);
    exit();
}
if(isset($_SESSION['user']['Image_utilisateur']) && $_SESSION['user']['Image_utilisateur'] == 'NULL'){
    $_SESSION['user']['Image_utilisateur'] = 'default.png';
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    $name = empty($_POST['lastname']) ? $_SESSION['user']['lastname_utilisateur'] : $_POST['lastname'];

    $prenom = empty($_POST['firstname']) ? $_SESSION['user']['firstname_utilisateur'] : $_POST['firstname'];

    $pseudo = empty($_POST['nickname']) ? $_SESSION['user']['nickname_utilisateur'] : $_POST['nickname'];

    $birthdate = empty($_POST['birthdate']) ? $_SESSION['user']['birthdate_utilisateur'] : $_POST['birthdate'];

    $mail = empty($_POST['mail']) ? $_SESSION['user']['email_utilisateur'] : $_POST['mail'];

    $description_utilisateur = empty($_POST['description']) ? ($_SESSION['user']['description_utilisateur']== NULL ? '' : $_SESSION['user']['description_utilisateur']) : $_POST['description'];

    $Image_utilisateur = "default.png";

    Utilisateur::ModifyUser($name, $prenom, $pseudo, $birthdate, $mail, $description_utilisateur, $Image_utilisateur);
    $_SESSION['user'] = Utilisateur::getInfos($mail);

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();

}

include '../views/view-profil.php';