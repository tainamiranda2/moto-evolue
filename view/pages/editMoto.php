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
<form action="?page=save" method="POST">
    <input type="hidden" name="acao" value="edit">

    <input type="hidden" name="id" value="<?php print $row->id; ?>" /> 
    
       
    <label>Nome</label>
        <input type="text" placeholder="informe o nome da moto" name="nome"
        value="<?php print $row->nome; ?>" 
        />

        <label>Marca</label>
        <input type="text" placeholder="informe a marca da moto" name="marca"
        value="<?php print $row->marca; ?>" 
        />

        <label>Preço</label>
        <input type="number" placeholder="informe o preço da moto" name="preco"
        value="<?php print $row->preco; ?>" 
        />

        <label>Cor</label>
        <input type="text" placeholder="informe a cor da moto" name="cor"
        value="<?php print $row->cor; ?>" 
        />

        <label>Informe uma data</label>
        <input type="date" placeholder="informe a data da moto" name="ano"
        value="<?php print $row->ano; ?>" 
        />

        <label>Velocidade</label>
        <input type="number" placeholder="informe o preço a velocidade da moto" name="velocidade"
        value="<?php print $row->velocidade; ?>" 
        />
      <br/>
        <button type="submit">Enviar</button>
    </fieldset>
  
</form>

</body>

</html>