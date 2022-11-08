<?php
if (isset($_POST['updateCidade'])) {
  $id = $_GET['id'];
  $cidade = $_POST['cidade'];
  $uf = $_POST['id-uf'];
  $sql = "UPDATE `cidade` SET `cidade`='$cidade', `id-uf`='$uf' WHERE `id`='$id'";
  $result = $conn->query($sql);
  if ($result == TRUE) {

    echo "Cidade atualizado com sucesso.";
  } else {

    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

if (isset($_GET['id'])) {

  $id = $_GET['id'];

  $sql = "SELECT * FROM `cidade` WHERE `id`='$id'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $cidade = $row['cidade'];
      $uf = $row['id-uf'];
    }
  }
}
?>