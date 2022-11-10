<?php
  $servername = "localhost";
  $database = "aulas_uninga";
  $username = "root";
  $password = "";
  $conn = mysqli_connect($servername, $username, $password, $database);
  mysqli_select_db($conn, $database,) or die('Erro na seleção do banco');
?>