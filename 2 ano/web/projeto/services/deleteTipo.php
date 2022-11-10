<?php 
include "config.php"; 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `tipo` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Tipo de Contato deletado com sucesso.";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

}
