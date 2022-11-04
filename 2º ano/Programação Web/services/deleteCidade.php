<?php 
include "config.php"; 
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `cidade` WHERE `id`='$id'";

    echo $sql;
    
     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Cidade deletada com sucesso.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
?>