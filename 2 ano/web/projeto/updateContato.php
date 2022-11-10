<?php
include "config.php";
include "./services/updateContato.php";
?>
<html>

<head>
  <link rel="stylesheet" href="./stylesheet/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Atualiza Contato</title>
</head>
<header>
  <?php include "navbar.php"; ?>
</header>

<body>

  <h2>Atualizar Contato</h2>
  <form action="" method="POST">
    Nome:<br>
    <?php
    include "./views/contato-pessoa.php";
    ?>
    <br>
    Tipo de Contato:<br>
    <?php
    include "./views/contato-tipo.php";
    ?>
    <br>
    Endereço:<br>
    <input type="text" name="endereço" required>
    <br><br>
    <input type="submit" value="Update" name="updateContato">
  </form>

</body>

</html>