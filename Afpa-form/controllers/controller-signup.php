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

            try {

                $dbName = 'ecoride';
                $dbUser = 'ecoride';
                $dbPassword = 'ecoride';

                $db = new PDO("mysql:host=localhost;dbname=" . DBNAME, DBUSER, DBPASS);
                var_dump($db);

                $sql = "INSERT INTO `utilisateur` (`firstname_utilisateur`, `lastname_utilisateur`, `nickname_utilisateur`,`birthdate_utilisateur`,`email_utilisateur`,`password_utilisateur`,`ID_Entreprise`) VALUES ( :firstname, :lastname, :pseudo, :birthdate, :email, :password_utilisateur, :id_enterprise) ";

                $query = $db->prepare($sql);

                $nom = htmlspecialchars($_POST['nom']);
                $prenom = $_POST['prenom'];
                $pseudo = htmlspecialchars($_POST["pseudo"]);
                $birthdate = $_POST['birthdate'];
                $email = $_POST['mail'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $enterprise = $_POST['enterprise'];

                //on relie les valeurs à nos marqueurs nominatifs
                $query->bindValue(':lastname', $nom, PDO::PARAM_STR);
                $query->bindValue(':firstname', $prenom, PDO::PARAM_STR);
                $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
                $query->bindValue(':birthdate', $birthdate, PDO::PARAM_STR);
                $query->bindValue(':email', $email, PDO::PARAM_STR);
                $query->bindValue(':password_utilisateur', $password, PDO::PARAM_STR);
                $query->bindValue(':id_enterprise', $enterprise, PDO::PARAM_STR);

                //on execute la requête
                $query->execute();
            } catch (PDOException $e) {
                echo 'Erreur :' . $e->getMessage();
            }
        }
    }
    include('../views/view-signup.php');
    ?>


</body>

</html>