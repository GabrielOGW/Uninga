<html>
 <head>
  <title>Cidades</title>
 </head>
 <body style="
  width: 700px; 
  margin-left: auto;
  margin-right: auto;
 ">
  <h2>Selecione uma cidade:</h2>
  <?php
    $cidades = [
      "São Paulo",
      "Curitiba",
      "Maringá",
      "Rio de Janeiro",
      "Apucarana"
    ];
    ?>
    <form action="">
      <select>
        <option><?php echo $cidades[0]?></option>
        <option><?php echo $cidades[1]?></option>
        <option><?php echo $cidades[2]?></option>
        <option><?php echo $cidades[3]?></option>
        <option><?php echo $cidades[4]?></option>
      </select>
    </form>
    Selecionando elementos a partir de um array
 </body>
</html>