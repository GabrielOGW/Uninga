<?php
include "config.php";
if (isset($_POST['submit'])) {
  $nome = $_POST['id-pessoa'];
  $tipo = $_POST['id-tipo'];
  $endereco = $_POST['endereço'];
  $sql = "INSERT INTO `contato`(`id-pessoa`, `id-tipo`, `endereço`) VALUES ('$nome', '$tipo', '$endereco')";

  $result = $conn->query($sql);
  

  if ($result == TRUE) {

    echo "Novo Contato gravado com sucesso.";
  } else {

    echo "Erro:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>