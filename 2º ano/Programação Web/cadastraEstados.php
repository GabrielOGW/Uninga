<?php
include "config.php";
include "./services/createEstado.php";
?>

<!DOCTYPE html>

<html>
<header>
  <?php include "navbar.php"; ?>
</header>

<head>
  <link rel="stylesheet" href="./stylesheet/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Cadastro de Estados</title>
</head>

<body>
  <h2>Cadastro de Estados</h2>
  <form action="estados.php" method="POST">
    Estado:<br>
    <input type="text" name="estado">
    <br>
    Sigla:<br>
    <input type="text" name="sigla">
    <br><br>
    <input type="submit" name="submit" value="submit">
  </form>

</body>

</html>