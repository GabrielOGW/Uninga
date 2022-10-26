<?php 
include "config.php";
$sql = "SELECT * FROM cidade";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>Cidades</title>
</head>
<header>
  <?php include "navbar.php"; ?>
</header>