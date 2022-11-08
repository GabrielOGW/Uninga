<?php
$pessoa_cidade = "SELECT `cidade`.`id`, `cidade`.`cidade` FROM `cidade`";
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