<?php 
include "config.php";
$sql = "SELECT * FROM tipo";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>Tipos de Contato</title>
</head>
<header>
  <?php include "navbar.php"; ?>
</header>
<body>
  <div class="container">
    <h2>Tipos de Contato</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tipo de contato</th>
          <th><a class="btn btn-primary" href="cadastraTipo.php">Cadastrar novo</a></th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['tipo']; ?></td>
              <td>
                <a class="btn btn-info" href="updateTipo.php?id=<?php echo $row['id']; ?>">Editar</a>&nbsp;
                <a class="btn btn-danger" href="deleteTipo.php?id=<?php echo $row['id']; ?>">Deletar</a>
              </td>
            </tr>
        <?php       }
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>