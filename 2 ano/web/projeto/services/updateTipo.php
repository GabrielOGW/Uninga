<?php
if (isset($_POST['updateTipo'])) {
  $id = $_GET['id'];
  $tipo = $_POST['tipo'];
  $sql = "UPDATE `tipo` SET `tipo`='$tipo' WHERE `id`='$id'";
  $result = $conn->query($sql);
  if ($result == TRUE) {
    echo "Tipo de contato atualizado com sucesso.";
  } else {

    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM `tipo` WHERE `id`='$id'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $tipo = $row['tipo'];
    }
  }
}
?>