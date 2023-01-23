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
<form class="formSearch" action="acao">
<input type="hidden" name="acao" value="checkUser">

<input name="pesquisa" type="text" placeholder="Faça uma pesquisa">
<button type="submit">Pesquisar</button>
</form>

<!--itens gerais-->
<?php
  $busca =$_GET['pesquisa'];
//print $_SESSION["pesquisar"];
$sql = "SELECT FROM moto WHERE nome LIKE '$busca' or marca LIKE  '$busca' ";

$res = $conn->query($sql);

$qtd=$res->num_rows;

if($qtd>0){
  print "Estou aqui";
}else{
print "algo deu errado";
}
?>
<h2>oi</h2>
</body>

</html>