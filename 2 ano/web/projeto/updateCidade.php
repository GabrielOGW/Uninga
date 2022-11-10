<?php
include "config.php";
include "./services/updateCidade.php";
?>
<html>

<head>
  <link rel="stylesheet" href="./stylesheet/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Atualiza Cidade</title>
</head>
<header>
  <?php include "navbar.php"; ?>
</header>

<body>

  <h2>Atualizar Cidade</h2>
  <form action="" method="POST">
    Cidade:<br>
    <input type="text" name="cidade" value="<?php echo $cidade; ?>">
    <br>
    Estado:<br>
    <?php
    include "./views/cidade-estados.php";
    ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <br><br>

    <input type="submit" value="Update" name="updateCidade">
  </form>

</body>

</html>