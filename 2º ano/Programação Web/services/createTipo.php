<?php
include "config.php";
if (isset($_POST['submit'])) {
  $tipo = $_POST['tipo'];
  $sql = "INSERT INTO `tipo`(`tipo`) VALUES ('$tipo')";

  $result = $conn->query($sql);

  if ($result == TRUE) {

    echo "Novo tipo gravado com sucesso.";
  } else {

    echo "Erro:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>