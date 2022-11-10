<?php
include "config.php";
if (isset($_POST['submit'])) {
  $estado = $_POST['estado'];
  $sigla = $_POST['sigla'];
  $sql = "INSERT INTO `estados`(`Estado`, `sigla`) VALUES ('$estado', '$sigla')";

  $result = $conn->query($sql);

  if ($result == TRUE) {

    echo "Novo estado gravado com sucesso.";
  } else {

    echo "Erro:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>