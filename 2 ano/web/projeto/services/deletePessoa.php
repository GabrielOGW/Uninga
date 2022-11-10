<?php 
include "config.php"; 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `pessoa` WHERE `id`='$id'";
    
    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Pessoa deletada com sucesso.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}