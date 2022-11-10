<?php
$cidade_estados = "SELECT DISTINCT `cidade`.`id-uf`, `estados`.`Sigla` FROM `cidade` RIGHT JOIN `estados` ON `estados`.`id` = `cidade`.`id-uf`";
?>
<select name="id-uf">
  <?php
  $result = $conn->query($cidade_estados);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  ?>
      <option value="<?php echo $row['id-uf'] ?>"> <?php echo $row['Sigla'] ?> </option>
  <?php
    }
  }
  ?>
</select>