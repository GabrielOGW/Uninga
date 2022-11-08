<?php
if (isset($_POST['updateContato'])) {
  $nome = $_POST['id-pessoa'];
  $tipo = $_POST['id-tipo'];
  $endereco = $_POST['endereço'];
  $sql = "UPDATE `contato` SET `id-pessoa`='$nome', `id-tipo`='$tipo', `endereço`='$endereco' WHERE `endereço`='$endereco'";
  
  $result = $conn->query($sql);
  
  if ($result == TRUE) {

    echo "Contato atualizado com sucesso.";
  } else {

    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

if (isset($_GET['endereco'])) {
  $endereco = $_GET['endereco'];
  $sql = "SELECT * FROM `contato` WHERE `endereço`='$endereco'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $nome = $row['nome'];
      $tipo = $row['tipo'];
    }
  }
}
?>