<?php

include "config.php";

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $estado = $_POST['estado'];
  $sql = "UPDATE `estados` SET `Estado`='$estado' WHERE `id`='$id'";
  $result = $conn->query($sql);
  if ($result == TRUE) {

    echo "Estado atualizado com sucesso.";
  } else {

    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

if (isset($_GET['id'])) {

  $id = $_GET['id'];

  $sql = "SELECT * FROM `estados` WHERE `id`='$id'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $estado = $row['Estado'];
    }

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
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <br><br>

        <input type="submit" value="Update" name="update">
      </form>

    </body>

    </html>

<?php

  } else {

    header('Location: view.php');
  }
}

?>