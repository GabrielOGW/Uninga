<?php 
include "config.php"; 
if (isset($_GET['endereço'])) {
    $endereco = $_GET['endereço'];
    $sql = "DELETE FROM `contato` WHERE `endereço`='$endereco'";
    
    echo $sql;

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Contato deletada com sucesso.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

}