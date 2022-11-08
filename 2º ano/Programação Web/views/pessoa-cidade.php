<?php
$pessoa_cidade = "SELECT DISTINCT `pessoa`.`id`, `pessoa`.`nome`, `cidade`.`cidade`, `pessoa`.`ativo` FROM `pessoa` RIGHT JOIN `cidade` ON `pessoa`.`id-cidade` = `cidade`.`id`";
?>
<select name="id-cidade">
  <?php
  $result = $conn->query($pessoa_cidade);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  ?>
      <option value="<?php echo $row['id'] ?>"> <?php echo $row['cidade'] ?> </option>
  <?php
    }
  }
  ?>
</select>