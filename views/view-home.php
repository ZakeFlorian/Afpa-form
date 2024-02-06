<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <title>Home</title>
</head>

<body>
  <h1 class="text-center">
    <?php echo 'Nous somme le ' . $dateDuJour ?>
  </h1>
  <div class="card" style="width: 18rem;">
    <img src="<?= $_SESSION['user']['Image_utilisateur'] ?>" class="card-img-top" alt="photo de l'utilisateur">
    <div class="card-body">
      <h5 class="card-title">Pseudo :
        <?= $_SESSION['user']['nickname_utilisateur'] ?>
      </h5>
      <a href="controller-trajet.php"><button> Ajouter un trajet</button></a>
      <a href="controller-profil.php"><button>Profil</button></a>
      <a href="controller-historique.php"><button>Historique des trajets</button></a>
    </div>
  </div>




  <a href="controller-deco.php"><button type="button" class="btn btn-danger">Déconnexion</button></a>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>