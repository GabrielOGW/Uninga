<?php
include "config.php";
if (isset($_POST['submit'])) {
  $cidade = $_POST['cidade'];
  $sigla = $_POST['sigla'];
  $sql = "INSERT INTO `cidade`(`cidade`, `id-uf`) VALUES ('$cidade', '$sigla')";

  $result = $conn->query($sql);

  if ($result == TRUE) {

    echo "Nova cidade gravada com sucesso.";
  } else {

    echo "Erro:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>