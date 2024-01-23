<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Historique Trajets</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <img src="<?= $_SESSION['user']['Image_utilisateur'] ?>" class="card-img-top" alt="photo de l'utilisateur">
  <div class="card-body">
    <h5 class="card-title">Trajets <?= $_SESSION['trajet']['id_utilisateur'] ?></h5>

    <a href="controller-home.php"><button>Retour</button></a>
  </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>