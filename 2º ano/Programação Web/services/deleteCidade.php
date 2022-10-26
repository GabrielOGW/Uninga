<?php 
include "config.php"; 
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `cidade` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Cidade deletado com sucesso.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
?>