<?php
include "config.php";
include "./services/updatePessoa.php";
?>
<html>

<head>
  <link rel="stylesheet" href="./stylesheet/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Atualiza Pessoa</title>
</head>
<header>
  <?php include "navbar.php"; ?>
</header>

<body>

  <h2>Atualizar Pessoa</h2>
  <form action="" method="POST">
    Nome:<br>
    <input type="text" name="nome" value="<?php echo $nome; ?>">
    <br>
    Cidade:<br>
    <?php
    include "./views/pessoa-cidade.php";
    ?>
    <br>
    Ativo:<br>
    <input type="checkbox" name="ativo">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <br><br>

    <input type="submit" value="Update" name="updatePessoa">
  </form>

</body>

</html>