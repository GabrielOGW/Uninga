<?php
include "config.php";
include "./services/.php";
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./stylesheet/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Cadastro de Pessoas</title>
</head>

<header>
  <?php include "navbar.php"; ?>
</header>

<body>
  <h2>Cadastro de Pessoas</h2>
  <form action="" method="POST">
    Nome:<br>
    <input type="text" name="nome">
    <br>
    Cidade:<br>
    <?php
    include "./views/pessoa-cidade.php";
    ?>
    <br>
    Ativo:<br>
    <input type="checkbox" name="ativo">
    <br><br>
    <input type="submit" name="submit" value="submit">
  </form>

</body>

</html>