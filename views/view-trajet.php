<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div class="container mt-5 formulaire">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>

            <div class="mb-3">
                <label for="date" class="text-white">Date du trajet<sup class="star">*</sup> :
                    <input class="inputField" type="date" id="date" name="date" value="<?php if (!empty($date)) {
                        echo $date;
                    } ?>" required>
                    <span class="input-warning text-danger">
                        <?= isset($errors["date"]) ? $errors["date"] : "" ?>
                    </span>
                </label>
            </div>

            <div class="mb-3">
            <label for="traveltime" class="text-white">Temps de trajet</label>
                <input class="input-select-width" type="time" id="appt" name="traveltime" min="09:00" max="18:00"/>
                <p class="text-warning">Format [Heure:Minute]</p>
                <span class="input-warning text-danger">
                    <?= $errors['traveltime'] ?? '' ?>
                </span>
            </div>

            <div class="mb-3">
                <label for="distance" class="text-white">Distance du trajet (en km) :</label>
                <input type="text" id="distance" name="distance" required value="<?= $_POST['distance'] ?? '' ?>"/>
                <span class="input-warning text-danger">
                    <?= $errors['distance'] ?? '' ?>
                </span>
            </div>

            <div class="mb-3">
                <select name="transport" class="rounded" id="transport">
                    <option value="">--Veuillez selectionner un mode de transport--</option>
                    <option value="1" <?= isset($_POST['transport']) && $_POST['transport'] == 1 ? 'selected' : '' ?>>
                        Vélo </option>
                    <option value="2" <?= isset($_POST['transport']) && $_POST['transport'] == 2 ? 'selected' : '' ?>>
                        Marche à pied </option>
                    <option value="3" <?= isset($_POST['transport']) && $_POST['transport'] == 3 ? 'selected' : '' ?>>
                        Skate </option>
                    <option value="4" <?= isset($_POST['transport']) && $_POST['transport'] == 4 ? 'selected' : '' ?>>
                        Trotinette </option>
                    <option value="5" <?= isset($_POST['transport']) && $_POST['transport'] == 5 ? 'selected' : '' ?>>
                        Roller </option>
                </select>
                <span class="input-warning text-danger">
                    <?= $errors['transport'] ?? '' ?>
                </span>
            </div>


            <input class="btn btn-primary" type="submit" value="Valider">
        </form>
    </div>
    <footer>
        <?php
        include 'templates/footer.php';
        ?>
    </footer>
</body>

</html>