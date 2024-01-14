
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulaire d'inscription</title>
</head>
<body>
<?php
include ('../views/templates/header.php');
?>
<div class="d-flex flex-column container">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
            <label for="nom">Nom :
                <input type="text" id="nom" name="nom" size="50" placeholder="ex:DOE"
                    value="<?php if (!empty($name)) {
                        echo $name;
                    } ?>" required>
            </label>
            <label for="prenom" >Prénom :
                <input type="text" id="prenom" name="prenom" size="50" placeholder="ex:Peter"
                    value="<?php if (!empty($prenom)) {
                        echo $prenom;
                    } ?>">
            </label>
            <label for="birthdate" >Date de naissance :
                <input type="date" id="birthdate" name="birthdate" size="10"
                    value="<?php if (!empty($birthdate)) {
                        echo $birthdate;
                    } ?>">
            </label>
            <label for="mail" >Courriel :
                <input type="text" id="mail" name="mail" size="50" placeholder="Ex:mon-mail@mail.fr"
                    value="<?php if (!empty($mail)) {
                        echo $mail;
                    } ?>">
            </label>
            <label for="password">Mot de passe :
                <input type="password" id="password" name="password" size="50"
                    value="<?php if (!empty($password)) {
                        echo 'correct';
                    } ?>">
            </label>
            <label for="confirmPassword" >Confirmation du mot de passe :
                <input type="password" id="confirmPassword" name="confirmPassword" size="20"
                    value="<?php if (!empty($confirmPassword)) {
                        echo 'correct';
                    } ?>">
            </label>
            <input class="btn-signup" type="submit" value="S'enregistrer">
        </form>
                  </div>

<?php
include ('../views/templates/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>