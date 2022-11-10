<?php
$contato_pessoa = "SELECT `id`, `nome` FROM `pessoa`";
?>
<select name="id-pessoa">
  <?php
  $result = $conn->query($contato_pessoa);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  ?>
      <option value="<?php echo $row['id'] ?>"> <?php echo $row['nome'] ?> </option>
  <?php
    }
  }
  ?>
</select>