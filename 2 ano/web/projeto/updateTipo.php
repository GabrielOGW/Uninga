<?php
include "config.php";
include "./services/updateTipo.php";
?>

<html>

<head>
  <link rel="stylesheet" href="./stylesheet/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<header>
  <?php include "navbar.php"; ?>
</header>

<body>
  <h2>Atualizar Tipo de Contato</h2>
  <form action="" method="post">
    Tipo:<br>
    <input type="text" name="tipo" value="<?php echo $tipo; ?>">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <br><br>
    <input type="submit" value="Update" name="updateTipo">
  </form>

</body>

</html>