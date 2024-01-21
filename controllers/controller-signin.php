<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if (empty($_POST['mail'])) {
        $errors['email'] = 'Veuillez saisir votre Email';
    }

    if (empty($_POST['password'])) {
        $errors['password'] = 'Veuillez saisir votre mot de passe';
    }

    if (empty($errors)) {

        if (!Utilisateur::checkMailExists($_POST['mail'])) {
            $errors['mail'] = 'Utilisateur Inconnu';
        } else {

            $utilisateurInfos = Utilisateur::getInfos($_POST['mail']);

            if (password_verify($_POST['password'], $utilisateurInfos['mdp_participant'])) {
                header('Location: controller-home.php');
            } else {
                $errors['password'] = 'Mauvais mot de passe';
            }
        }
    }
}


include_once '../views/view-signin.php';