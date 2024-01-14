<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('../views/view-signup.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $birthdate = $_POST['birthdate'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    function afficherMessageErreur($champ, $message) {
        echo "<p style='color: red;'>$message</p>";
        echo "<script>document.getElementById('$champ').style.border = '1px solid red';</script>";
    }

    function afficherValeur($label, $valeur) {
        echo "$label : $valeur <br>";
    }

    if (empty($name)) {
        afficherMessageErreur('nom', "Champ 'Nom' obligatoire");
    } else {
        afficherValeur("Nom", $name);
    }

    if (empty($prenom)) {
        afficherMessageErreur('prenom', "Champ 'Prénom' obligatoire");
    } else {
        afficherValeur("Prénom", $prenom);
    }

    if (empty($birthdate)) {
        afficherMessageErreur('birthdate', "Champ 'Date de naissance' obligatoire");
    } else {
        afficherValeur("Date de naissance", $birthdate);
    }

    if (empty($mail)) {
        afficherMessageErreur('mail', "Champ 'Adresse mail' obligatoire");
    } else {
        afficherValeur("Adresse mail", $mail);
    }

    if (empty($password)) {
        afficherMessageErreur('password', "Champ 'Mot de passe' obligatoire");
    } else {
        afficherValeur("Mot de passe", "Merci");
    }

    if (empty($confirmPassword) || $confirmPassword !== $password) {
        afficherMessageErreur('confirmPassword', "Les mots de passe ne correspondent pas");
    } else {
        afficherValeur("Les mots de passes", "sont identiques");
    }
}
?>


</body>
</html>
