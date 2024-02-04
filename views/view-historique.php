<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Historique Trajets</title>
</head>
<body>
  <div class="">
<table >
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Distance</th>
                    <th>Durée</th>
                    <th>Moyen de transport</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody class="tb-content" >
                <?php foreach ($trajetInfos as $value) { ?>
                    <tr>
                    <td>
                                    <form action="" method="post">
                                        <input class="deleteTrajet" type="hidden" name="id_trajet" value="<?= $trajet['id_trajet'] ?>">
                                        <button class="btnDelete" type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce trajet ?')">
                                        </button>
                                    </form>
                                </td>
                        <td>
                            <?= $value['date_FR'] ?>
                        </td>
                        <td>
                            <?= $value['distance_trajet'] . ' km' ?>
                        </td>
                        <td>
                            <?= $value['traveltime_trajet'] ?>
                        </td>
                        <td>
                            <?= $value['Type_modedetransport'] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
      </div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="../assets/js/delete.js"></script>
</body>
</html>