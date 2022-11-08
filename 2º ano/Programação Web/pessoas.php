<?php 
include "config.php";
$sql = "SELECT * FROM `pessoa-cidade`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>Pessoas</title>
</head>
<header>
  <?php include "navbar.php"; ?>
</header>
<body>
  <div class="container">
    <h2>Pessoas</h2>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Cidade</th>
          <th>Ativo</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['nome']; ?></td>
              <td><?php echo $row['cidade']; ?></td>
              <td><?php echo $row['ativo']; ?></td>
              <td>
                <a class="btn btn-info" href=".php?id=<?php echo $row['id'], $row['nome']; ?>">Editar</a>&nbsp;
                <a class="btn btn-danger" href=".php?id=<?php echo $row['id']; ?>">Deletar</a>
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