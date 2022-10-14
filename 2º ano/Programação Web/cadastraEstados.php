<?php
include "config.php";
if (isset($_POST['submit'])) {
  $estado = $_POST['estado'];
  $sql = "INSERT INTO `estados`(`Estado`) VALUES ('$estado')";

  $result = $conn->query($sql);

  if ($result == TRUE) {

    echo "Novo estado gravado com sucesso.";
  } else {

    echo "Erro:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
include "navbar.php";
?>

<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Cadastro de Estados</title>
</head>

<body>
  <h2>Cadastro de Estados</h2>
  <form action="" method="POST">
    Estado:<br>
    <input type="text" name="estado">
    <br><br>
    <input type="submit" name="submit" value="submit">
  </form>

</body>

</html>