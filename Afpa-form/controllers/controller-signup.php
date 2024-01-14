<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $birthdate = $_POST['birthdate'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if (empty($name)) {
        echo "Champ 'Nom' obligatoire <br>";
    } else {
        echo "Nom : " . $name . "<br>";
    }
    if (empty($prenom)) {
        echo "Champ 'Prénom' obligatoire <br>";
    } else {
        echo "Prénom : " . $prenom . "<br>";
    }
    if (empty($birthdate)) {
        echo "Champ 'Date de naissance' obligatoire <br>";
    } else {
        echo "Date de naissance : " . $birthdate . "<br>";
    }
    if (empty($mail)) {
        echo "Champ 'Adresse mail' obligatoire <br>";
    } else {
        echo "Adresse mail : " . $mail . "<br>";
    }
    if (empty($password)) {
        echo "Champ 'Mot de passe' obligatoire <br>";
    } else {
        echo "Mot de passe : Merci <br>";
    }
    if (empty($confirmPassword) || $confirmPassword !== $password) {
        echo "Les mots de passe ne correspondent pas <br>";
    } else {
        echo "Les mots de passes sont identiques <br>";
    }
}

?>
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
?>

</body>
</html>
