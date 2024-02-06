<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Home</title>
    <style>
        .container {
            border: 1px solid #ddd;
            background: linear-gradient(to left, #87CEEB, black);
            border-radius: 8px;
            padding: 20px;
        }

        .hidden {
            display: none;
        }
        .show{
            display: block;
        }
    </style>
</head>
<?php
include 'templates/header.php';
?>

<body class="bg-black">

    <div class="container card my-2" style="width: 18rem;">
    <a href="controller-delete.php"><button class="btn btn-danger">Supprimer le compte</button></a>
        <img src="../assets/img/<?= $_SESSION['user']['Image_utilisateur'] ?>" class="card-img-top text-white"
            alt="photo de l'utilisateur">
        <div class="card-body">
            <h5 class="card-title text-warning">Nom : <p class="text-white">
                    <?= $_SESSION['user']['lastname_utilisateur'] ?>
                </p>
            </h5>
            <h5 class="card-title text-warning">Prénom : <p class="text-white">
                    <?= $_SESSION['user']['firstname_utilisateur'] ?>
                </p>
            </h5>
            <h5 class="card-title text-warning">Pseudo : <p class="text-white">
                    <?= $_SESSION['user']['nickname_utilisateur'] ?>
                </p>
            </h5>
            <h5 class="card-title text-warning">Email : <p class="text-white">
                    <?= $_SESSION['user']['email_utilisateur'] ?>
                </p>
            </h5>
            <h5 class="card-title text-warning">Date de naissance : <p class="text-white">
                    <?= $_SESSION['user']['birthdate_utilisateur'] ?>
                </p>
            </h5>
            <h5 class="card-title text-warning">Entreprise : <p class="text-white">
                    <?= $_SESSION['user']['name_entreprise'] ?>
                </p>
            </h5>
            <h5 class="card-title text-warning">A propos de vous : <p class="text-white">
                    <?= $_SESSION['user']['description_utilisateur'] ?>
                </p>
            </h5>
            <a href="controller-home.php"><button class="btn btn-primary d-block">Retour</button></a>
            <button class="btn btn-warning d-block boutonModifier" id="boutonModifier">Modifier</button>
        </div>
    </div>
    <div class="container divModify hidden text-white my-5">
        <form method="POST" action="" novalidate>

            <label class="labelSignup" for="Image_utilisateur">Image :
                <input type="file" name="Image_utilisateur" id="Image_utilisateur" accept="image/*" />
            </label>
            <br><br>
            <label class="labelSignup" for="lastname">Nom: </label>
            <input class="inputModifier" type="text" name="lastname"></input>
            <br><br>
            <label class="labelSignup" for="firstname">Prénom: </label>
            <input class="inputModifier" type="text" name="firstname"></input>
            <br><br>
            <label class="labelSignup" for="nickname">Pseudo: </label>
            <input class="inputModifier" type="text" name="nickname"></input>
            <br><br>
            <label class="labelSignup" for="birthdate">Date de naissance: </label>
            <input class="inputModifier" type="date" name="birthdate"></input>
            <br><br>
            <label class="labelSignup" for="mail">Mail: </label>
            <input class="inputModifier" type="text" name="mail"></input>
            <br><br>
            <label class="labelSignup" for="description">Description: </label>
            <textarea class="inputModifier" type="text" name="description"></textarea>
            <br><br>
            <button class="btn-modifier">Modifier</button>

        </form>

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
    <script>
    var boutonModifier = document.getElementById('boutonModifier');
    var divModify = document.querySelector('.divModify');

    boutonModifier.addEventListener("click", function () {
        divModify.classList.toggle('hidden');
    });
    </script>
</body>

</html>