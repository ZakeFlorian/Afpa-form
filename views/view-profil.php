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
    
<div class="container card" style="width: 18rem;">
  <img src="<?= $_SESSION['user']['Image_utilisateur'] ?>" class="card-img-top text-white" alt="photo de l'utilisateur">
  <div class="card-body">
    <h5 class="card-title text-warning">Entreprise : <p class="text-white"><?= $_SESSION['user']['name_entreprise'] ?></p></h5>
    <h5 class="card-title text-warning">Pseudo : <p class="text-white"><?= $_SESSION['user']['nickname_utilisateur'] ?></p></h5>
    <h5 class="card-title text-warning">Nom : <p class="text-white"><?= $_SESSION['user']['lastname_utilisateur'] ?></p></h5>
    <h5 class="card-title text-warning">Prénom : <p class="text-white"><?= $_SESSION['user']['firstname_utilisateur'] ?></p></h5>
    <h5 class="card-title text-warning">Email : <p class="text-white"><?= $_SESSION['user']['email_utilisateur'] ?></p></h5>
    <h5 class="card-title text-warning">Date de naissance : <p class="text-white"><?= $_SESSION['user']['birthdate_utilisateur'] ?></p></h5>
    <h5 class="card-title text-warning">A propos de vous : <p class="text-white"><?= $_SESSION['user']['description_utilisateur'] ?></p></h5>
    <a href="controller-home.php"><button class="btn btn-primary d-block">Retour</button></a>
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