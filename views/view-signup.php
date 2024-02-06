<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Formulaire d'inscription</title>

</head>

<body>
    <?php
    include('../views/templates/header.php');
    ?>
    <div class="container mt-5 formulaire">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
            <div class="mb-3">
                <label for="nom" class="form-label text-white">Nom :</label>
                <input type="text" id="nom" name="nom" class="form-control" size="50" placeholder="ex:DOE"
                    value="<?= $_POST['nom'] ?? '' ?>" required>
                <span class="input-warning text-danger">
                    <?= $errors['nom']?? '' ?>
                </span>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label text-white">Prénom :</label>
                <input type="text" id="prenom" name="prenom" class="form-control" size="50" placeholder="ex:Peter"
                    value="<?= $_POST['prenom'] ?? '' ?>">
                <span class="input-warning text-danger">
                    <?= $errors['prenom']?? '' ?>
                </span>
            </div>

            <div class="mb-3">
                <label for="pseudo" class="form-label text-white">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" class="form-control" size="50" placeholder="ex:Zake"
                    value="<?= $_POST['pseudo'] ?? '' ?>">
                <span class="input-warning text-danger">
                    <?= $errors['pseudo']?? '' ?>
                </span>
            </div>

            <label for="birthdate" class="text-white">Date de naissance<sup class="star">*</sup> :
                <input class="inputField" type="date" id="birthdate" name="birthdate" value="<?php if (!empty($birthdate)) {
                    echo $birthdate;
                } ?>" required>
                <span class="redInput spanBirthdate">
                <?= isset( $errors["spanBirthdate"])? $errors["spanBirthdate"]:""?>
                </span>
            </label>

            <div class="mb-3">
                <label for="mail" class="form-label text-white">Courriel :</label>
                <input type="text" id="mail" name="mail" class="form-control" size="50"
                    placeholder="Ex:mon-mail@mail.fr" value="<?= $_POST['mail'] ?? '' ?>">
                <span class="input-warning text-danger">
                    <?= $errors['mail']?? '' ?>
                </span>
            </div>

            <div class="mb-3">
                <select name="enterprise" class="rounded" id="enterprise">
                    <option value="">--Veuillez selectionner une entreprise--</option>
                    <option value="1" <?= isset($_POST['enterprise'])&&$_POST['enterprise']==1 ? 'selected' : ''?>>LunaTech Solutions</option>
                    <option value="2" <?= isset($_POST['enterprise'])&&$_POST['enterprise']==2 ? 'selected' : ''?>>Phoenix Consulting and Design</option>
                </select>
                <span class="input-warning text-danger">
                    <?= $errors['enterprise']?? '' ?>
                </span>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-white">Mot de passe :</label>
                <input type="password" id="password" name="password" class="form-control" size="50" value="<?= $_POST['password'] ?? '' ?>">
                <span class="input-warning text-danger">
                    <?= $errors['password']?? '' ?>
                </span>
            </div>

            <div class="mb-3">
                <label for="confirmPassword" class="form-label text-white">Confirmation du mot de passe :</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" size="20" value="<?= $_POST['confirmPassword'] ?? '' ?>">
                <span class="input-warning text-danger">
                    <?= $errors['confirmPassword']?? '' ?>
                </span>
            </div>

            <div class="mb-3">
                <label for="CGU" class="text-white">Conditions générales d'utilisation</label>
                <input type="checkbox" id="CGU" name="CGU" <?= isset($_POST['CGU'])?'checked' : '' ?>>
                <span class="input-warning text-danger">
                    <?= $errors['CGU']??'' ?>
                </span>
            </div>
            

            <input class="btn btn-primary" type="submit" value="S'enregistrer">
        </form>
    </div>

    <?php
    include('../views/templates/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>