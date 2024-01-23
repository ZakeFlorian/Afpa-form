<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-black">
    <?php
    include('../views/templates/header.php');
    ?>
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
                <label for="traveltime" class="text-white">Durée du trajet :</label>
                <input type="time" id="traveltime" name="traveltime" min="00:00" max="24:00" required value="<?= $_POST['traveltime'] ?? '' ?>" />
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
</body>

</html>