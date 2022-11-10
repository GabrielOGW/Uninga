<?php
include "config.php";
if (isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $cidade = $_POST['id-cidade'];
  $ativo = $_POST['ativo'];
  if ($ativo == 'on') {
    $ativo = 1;
  } else {
    $ativo = 0;
  }
  $sql = "INSERT INTO `pessoa`(`nome`, `id-cidade`, `ativo`) VALUES ('$nome', '$cidade', '$ativo')";

  $result = $conn->query($sql);
  

  if ($result == TRUE) {

    echo "Nova pessoa gravada com sucesso.";
  } else {

    echo "Erro:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>