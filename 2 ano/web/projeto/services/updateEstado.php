<?php
if (isset($_POST['updateEstado'])) {
  $id = $_GET['id'];
  $estado = $_POST['estado'];
  $sigla = $_POST['sigla'];
  $sql = "UPDATE `estados` SET `Estado`='$estado', `Sigla`='$sigla' WHERE `id`='$id'";
  $result = $conn->query($sql);
  if ($result == TRUE) {

    echo "Estado atualizado com sucesso.";
  } else {

    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

if (isset($_GET['id'])) {

  $id = $_GET['id'];

  $sql = "SELECT * FROM `estados` WHERE `id`='$id'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $estado = $row['Estado'];
      $sigla = $row['Sigla'];
    }
  }
}
?>