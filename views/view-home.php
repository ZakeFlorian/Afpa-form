<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home</title>
    <style>
        .container {
            border: 1px solid #ddd;
            background: linear-gradient(to left, #87CEEB, black);
            border-radius: 8px;
            padding: 20px;
        }
    </style>
</head>
<?php
include 'templates/header.php';
?>
<body class="bg-black">

<div class="container my-5">
    <div class="d-flex justify-content-end mt-3">
        <a href="controller-deco.php" class="btn btn-danger">Déconnexion</a>
    </div>

    <h1 class="text-center text-warning"><?php echo 'Nous sommes le ' . $dateDuJour ?></h1>

    <div class="card mx-auto" style="width: 18rem;">
        <img src="../assets/img/<?= $_SESSION['user']['Image_utilisateur'] ?>" class="card-img-top"
             alt="photo de l'utilisateur">
        <div class="card-body">
            <h5 class="card-title">Pseudo : <?= $_SESSION['user']['nickname_utilisateur'] ?></h5>
            <a href="controller-trajet.php" class="btn btn-primary d-block mb-2">Ajouter un trajet</a>
            <a href="controller-profil.php" class="btn btn-primary d-block mb-2">Profil</a>
            <a href="controller-historique.php" class="btn btn-primary d-block">Historique des trajets</a>
        </div>
    </div>
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