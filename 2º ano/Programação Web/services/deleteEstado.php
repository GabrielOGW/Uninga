<?php 
include "config.php"; 
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `estados` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Estado deletado com sucesso.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 
?>