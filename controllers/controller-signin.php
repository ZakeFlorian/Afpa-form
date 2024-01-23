<?php
session_start();
require_once("../models/user.php");
require_once("../config.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if (empty($_POST['mail'])) {
        $errors['mail'] = 'Veuillez saisir votre Email';
    }

    if (empty($_POST['password'])) {
        $errors['password'] = 'Veuillez saisir votre mot de passe';
    }
    if (empty($errors)) {

        if (!Utilisateur::checkMailExists($_POST['mail'])) {
            $errors['mail'] = 'Utilisateur Inconnu';
        } else {

            $utilisateurInfos = Utilisateur::getInfos($_POST['mail']);

            if (password_verify($_POST['password'], $utilisateurInfos['password_utilisateur'])) {

                $_SESSION['user'] = $utilisateurInfos;
                header('Location: controller-home.php');
            } else {
                $errors['password'] = 'Mauvais mot de passe';
            }
        }

    }
}


include_once '../views/view-signin.php';
