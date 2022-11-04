<?php
include "config.php";
if (isset($_POST['submit'])) {
  $cidade = $_POST['cidade'];
  $uf = $_POST['uf'];
  $sql = "INSERT INTO `cidade`(`cidade`, `id-uf`) VALUES ('$cidade', '$uf')";

  $result = $conn->query($sql);
  

  if ($result == TRUE) {

    echo "Nova cidade gravada com sucesso.";
  } else {

    echo "Erro:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>