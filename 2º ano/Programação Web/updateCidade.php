<?php
include "config.php";
include "./services/updateCidade.php";
?>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<header>
  <?php include "navbar.php"; ?>
  <title>Atualiza Cidade</title>
</header>

<body>

  <h2>Atualizar Cidade</h2>
  <form action="" method="POST">
    Cidade:<br>
    <input type="text" name="cidade" value="<?php echo $cidade; ?>">
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
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <br><br>

    <input type="submit" value="Update" name="update">
  </form>

</body>

</html>