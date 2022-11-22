<html>
 <head>
  <title>Funções</title>
 </head>
 <body style="
  width: 700px; 
  margin-left: auto;
  margin-right: auto;
 ">
  <?php
    $servername = "localhost";
    $database = "aulas_uninga";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

  mysqli_select_db($conn, $database,) or die('Erro na seleção do banco');

  $query = sprintf("SELECT nome FROM tb_função");
  $dados = mysqli_query($conn, $query) or die('Erro na query');
  $funcoes = mysqli_fetch_assoc($dados);
  ?>
  <h2>Selecione um cargo:</h2>
    <form action="">
      <select>
        <option>
        <?php foreach ($funcoes as $value) {
          echo $value;
        } ?>
        </option>
      </select>
    </form>
    Selecionando elementos a partir de um array dentro de um banco de dados
 </body>
</html>