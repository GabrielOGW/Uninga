<?php
$contato_tipo = "SELECT `id`, `tipo` FROM `tipo`";
?>
<select name="id-tipo">
  <?php
  $result = $conn->query($contato_tipo);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  ?>
      <option value="<?php echo $row['id'] ?>"> <?php echo $row['tipo'] ?> </option>
  <?php
    }
  }
  ?>
</select>