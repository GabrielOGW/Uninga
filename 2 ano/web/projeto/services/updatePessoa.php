<?php
if (isset($_POST['updatePessoa'])) {
  $id = $_GET['id'];
  $nome = $_POST['nome'];
  $cidade = $_POST['id-cidade'];
  $ativo = $_POST['ativo'];
  if ($ativo == 'on') {
    $ativo = 1;
  } else {
    $ativo = 0;
  }
  $sql = "UPDATE `pessoa` SET `nome`='$nome', `id-cidade`='$cidade', `ativo`='$ativo' WHERE `id`='$id'";
  
  $result = $conn->query($sql);
  
  if ($result == TRUE) {

    echo "Pessoa atualizada com sucesso.";
  } else {

    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM `pessoa` WHERE `id`='$id'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $nome = $row['nome'];
      $cidade = $row['id-cidade'];
    }
  }
}
?>