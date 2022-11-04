<?php
include "config.php";
include "./services/createCidade.php";
?>
<!DOCTYPE html>
<html>
<header>
  <?php include "navbar.php"; ?>
</header>

<head>
  <link rel="stylesheet" href="./stylesheet/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Cadastro de Cidades</title>
</head>

<body>
  <h2>Cadastro de Cidades</h2>
  <form action="cidade.php" method="POST">
    Cidade:<br>
    <input type="text" name="cidade">
    <br>
    Estado:<br>
    <select name="uf">
      <?php
      $sql = "SELECT DISTINCT `cidade`.`id-uf`, `estados`.`Sigla` FROM `cidade` RIGHT JOIN `estados` ON `estados`.`id` = `cidade`.`id-uf`";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <option value="<?php echo $row['id-uf'] ?>"> <?php echo $row['Sigla'] ?> </option>
      <?php
        }
      }
      ?>
    </select>
    <br><br>
    <input type="submit" name="submit" value="submit">
  </form>

</body>

</html>