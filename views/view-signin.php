<?php
require_once "../controllers/controller-signin.php"
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Form Signin</title>
</head>
<?php
include 'templates/header.php';
?>

<body>
    <h1 class="text-center">Connexion</h1>
    <div class="container mt-5 formulaire bg-secondary">
        <form method="POST" novalidate action="">
        <div class="mb-3">
                <label for="mail" class="form-label text-white">Courriel</label>
                <input type="text" id="mail" name="mail" class="form-control" size="50"
                    placeholder="Ex:mon-mail@mail.fr" value="<?= $_POST['mail'] ?? '' ?>">
                <span class="input-warning text-danger">
                    <?= $errors['mail']?? '' ?>
                </span>
            </div>

            <div class="mb-4 pb-4">
                <label for="password" class="form-label text-white">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control" size="50" value="<?= $_POST['password'] ?? '' ?>">
                <span class="input-warning text-danger">
                    <?= $errors['password']?? '' ?>
                </span>
            </div>
            <input class="btn btn-primary mb-1 pb-2 text-center mx-auto d-block" id="boutonConnect" type="submit" value="Se connecter">
            <a href="../controllers/controller-signup.php"><button type="button" class="btn btn-link d-block mx-auto text-white">Je m'inscris</button></a>
        </form>
</div>

    <footer>
        <?php
        include 'templates/footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>