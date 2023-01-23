<!DOCTYPE html>
<link rel="stylesheet" href="./assets/css/style.css"/>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Resultados da pesquisa</h2>


<!--itens gerais-->
<?php
$busca =$_POST["pesquisa"];
print $busca;
//print $_SESSION["pesquisar"];
$sql = "SELECT * FROM moto WHERE nome LIKE '%$busca%'  ";

$res = $conn->query($sql);
print $res;
$qtd=$res->num_rows;
print $qtd;

if($qtd>0){
  print "<h2> Estou aqui </h2>";
  while ($row = $res->fetch_object()) {
    print "<article>";
    print "<img alt='imagem de moto' src='./img.png' />";
    print "<section>";
    print "<h2><strong>Nome</strong>:" . $row->nome . "</h2>";
    print "<p><strong>Marca</strong>: " . $row->marca . "</p>";
    print "<p><strong>Preço</strong>:" . $row->preco . "</p>";
    print "<p><strong>Cor</strong>: " . $row->cor . "</p>";
    print "</article>";
  }
}else{
print "<p>Nenhum dado foi encontrado!</p>";
}
?>

</body>

</html>