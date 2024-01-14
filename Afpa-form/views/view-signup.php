
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulaire d'inscription</title>
    <style>
        .container {
            border: 1px solid #ddd;
            background: linear-gradient(to left, #87CEEB, black);
            border-radius: 8px;
            padding: 20px;
        }
    </style>
</head>
<body class="bg-black">
<?php
include ('../views/templates/header.php');
?>
<div class="container mt-5">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
        <div class="mb-3">
            <label for="nom" class="form-label text-white">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" size="50" placeholder="ex:DOE"
                value="<?php if (!empty($name)) { echo $name; } ?>" required>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label text-white">Prénom :</label>
            <input type="text" id="prenom" name="prenom" class="form-control" size="50" placeholder="ex:Peter"
                value="<?php if (!empty($prenom)) { echo $prenom; } ?>">
        </div>

        <div class="mb-3">
            <label for="birthdate" class="form-label text-white">Date de naissance :</label>
            <input type="date" id="birthdate" name="birthdate" class="form-control" size="10"
                value="<?php if (!empty($birthdate)) { echo $birthdate; } ?>">
        </div>

        <div class="mb-3">
            <label for="mail" class="form-label text-white">Courriel :</label>
            <input type="text" id="mail" name="mail" class="form-control" size="50" placeholder="Ex:mon-mail@mail.fr"
                value="<?php if (!empty($mail)) { echo $mail; } ?>">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label text-white">Mot de passe :</label>
            <input type="password" id="password" name="password" class="form-control" size="50"
                value="<?php if (!empty($password)) { echo 'correct'; } ?>">
        </div>

        <div class="mb-3">
            <label for="confirmPassword" class="form-label text-white">Confirmation du mot de passe :</label>
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" size="20"
                value="<?php if (!empty($confirmPassword)) { echo 'correct'; } ?>">
        </div>

        <input class="btn btn-primary" type="submit" value="S'enregistrer">
    </form>
</div>

<?php
include ('../views/templates/footer.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>