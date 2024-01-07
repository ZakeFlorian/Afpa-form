<?php
include ('./views/templates/header.php')
include ('./views/templates/footer.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
<form>
  <div class="mb-3">
    <label for="nomInput" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nomInput">
  </div>
  <div class="mb-3">
    <label for="prénomInput" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="prénomInput">
  </div>
  <div class="datePicker">
  <template>
  <div>
    <b-form-datepicker v-model="value" :date-disabled-fn="dateDisabled" locale="en"></b-form-datepicker>
  </div>
</template>
</div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="robotCheck">
    <label class="form-check-label" for="robotCheck">Je ne suis pas un robot</label>
  </div> -->

  <button type="submit" class="btn btn-primary">S'enregistrer'</button>
</form>
</body>
</html>