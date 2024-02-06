<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Home</title>
    <style>
      .card{
        margin: auto;
        box-shadow: 5px 5px 5px black;
      }
    </style>
</head>
<body>
    
<div class="card" style="width: 18rem;">
  <img src="<?= $_SESSION['user']['Image_utilisateur'] ?>" class="card-img-top" alt="photo de l'utilisateur">
  <div class="card-body">
    <h5 class="card-title">Entreprise : <?= $_SESSION['user']['name_entreprise'] ?></h5>
    <h5 class="card-title">Pseudo : <?= $_SESSION['user']['nickname_utilisateur'] ?></h5>
    <h5 class="card-title">Nom : <?= $_SESSION['user']['lastname_utilisateur'] ?></h5>
    <h5 class="card-title">Prénom : <?= $_SESSION['user']['firstname_utilisateur'] ?></h5>
    <h5 class="card-title">Email : <?= $_SESSION['user']['email_utilisateur'] ?></h5>
    <h5 class="card-title">Date de naissance : <?= $_SESSION['user']['birthdate_utilisateur'] ?></h5>
    <h5 class="card-title">A propos de vous : <?= $_SESSION['user']['description_utilisateur'] ?></h5>
    <a href="controller-home.php"><button>Retour</button></a>
  </div>
</div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>