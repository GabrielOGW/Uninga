<?php
include "config.php";
include "./services/createTipo.php";
?>

<!DOCTYPE html>

<html>
<header>
  <?php include "navbar.php"; ?>
</header>

<head>
  <link rel="stylesheet" href="./stylesheet/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Cadastro de Tipos de Contato</title>
</head>

<body>
  <h2>Cadastro de Tipos de Contato</h2>
  <form action="" method="POST">
    Tipo:<br>
    <input type="text" name="tipo">
    <br><br>
    <input type="submit" name="submit" value="submit">
  </form>

</body>

</html>