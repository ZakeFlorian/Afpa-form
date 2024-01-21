<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require("../config.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = [];


        if (empty($_POST['nom'])) {
            $errors['nom'] = "Veuillez saisir un nom";
        } 

        if (empty($_POST['prenom'])) {
            $errors['prenom'] = "Veuillez saisir un prenom";
        }

        if (empty($_POST['pseudo'])) {
            $errors['pseudo'] = "Veuillez saisir un pseudo";
        } 

        $birthdate = $_POST['birthdate'];
// Contrôle de la date de naissance
    if (empty($_POST['birthdate'])) {
        $errors["spanBirthdate"] = "Le champ Date de naissance ne peut pas être vide";
    }

        if (empty($_POST['mail'])) {
            $errors['mail'] = "Veuillez saisir un mail";
        } 

        if (!isset($_POST["enterprise"])) {
            $errors["enterprise"] = "Veuillez selectionner une entreprise";
        } 

        if (empty($_POST['password'])) {
            $errors['password'] = "Veuillez saisir un mot de passe";
        }

        if (empty($_POST['confirmPassword'])) {
            $errors['confirmPassword'] = "Veuillez saisir un mot de passe";
        } else if (!empty($_POST['password'])){
            if($_POST['confirmPassword'] !== $_POST['password']) {
            $errors['confirmPassword'] = "Les mots de passes ne correspondent pas";
        } 
        }

        if (!isset($_POST["CGU"])) {
            $errors["CGU"] = "Veuillez accepter nos CGU";
        }

        if (empty($errors)) {
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = $_POST['prenom'];
                $pseudo = htmlspecialchars($_POST["pseudo"]);
                $birthdate = $_POST['birthdate'];
                $email = $_POST['mail'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $enterprise = $_POST['enterprise'];

            header("Location: controller-signin.php");
            exit();
        }
    }
    if ($_SERVER["REQUEST_METHOD"] != "POST" || !empty($errors)) {
        include_once '../views/view-signup.php';
    }
    ?>


</body>

</html>