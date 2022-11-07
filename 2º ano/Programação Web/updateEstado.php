<?php
include "config.php";
include "./services/updateEstado.php";

?>
    <html>

    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <header>
  <?php include "navbar.php"; ?>
</header>
    <body>

      <h2>Atualizar estado</h2>
      <form action="" method="post">
        Estado:<br>
        <input type="text" name="estado" value="<?php echo $estado; ?>">
        <br>
        Sigla:<br>
        <input type="text" name="sigla" value="<?php echo $sigla; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <br><br>

        <input type="submit" value="Update" name="updateEstado">
      </form>

    </body>

    </html>
