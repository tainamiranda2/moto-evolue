<!DOCTYPE html>
<link rel="stylesheet" href="./assets/css/style.css"/>
<?php
    $sql = "SELECT * FROM moto WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);

    $row = $res->fetch_object();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mais detalhes</h2>
       
<article>
        <img src='./assets/img/moto.png'/>
        <p> <strong>Nome</strong>:<?php print $row->nome; ?><p>
        <p><strong>Marca</strong>:<?php print $row->marca; ?></p>
        <p><strong>Preço</strong>:<?php print $row->preco; ?></p>
        <p ><strong>Cor</strong>:<?php print $row->cor; ?></p>
        <p ><strong>Ano</strong>:<?php print $row->ano; ?></p>
        <p><strong>Velocidade</strong>:<?php print $row->velocidade; ?></p>
     
</artile>
  

</body>

</html>