<?php 
include "config.php";
$sql = "SELECT * FROM `contato-cidade-tipo`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>Contatos</title>
</head>
<header>
  <?php include "navbar.php"; ?>
</header>
<body>
  <div class="container">
    <h2>Contatos</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Tipo de Contato</th>
          <th>Endereço</th>
          <th><a class="btn btn-primary" href="cadastraContato.php">Cadastrar novo</a></th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
              <td><?php echo $row['nome']; ?></td>
              <td><?php echo $row['tipo']; ?></td>
              <td><?php echo $row['endereço']; ?></td>
              <td>
                <a class="btn btn-info" href="updateContato.php?id-tipo=<?php echo $row['id-tipo']; ?>">Editar</a>&nbsp;
                <a class="btn btn-danger" href="deleteContato.php?endereço=<?php echo $row['endereço']; ?>">Deletar</a>
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