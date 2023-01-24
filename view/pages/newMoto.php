<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastre um moto</h2>
<form action="?page=save"  method="POST">
    <input type="hidden" name="acao" value="createMoto">
        
        <label>Nome</label>
        <input type="text" required placeholder="informe o nome da moto" name="nome"/>

        <label>Marca</label>
        <input type="text" required placeholder="informe a marca da moto" name="marca"/>

        <label>Preço</label>
        <input type="number" required placeholder="informe o preço da moto" name="preco"/>

        <label>Cor</label>
        <input type="text" required placeholder="informe a cor da moto" name="cor"/>

        <label>Informe uma data</label>
        <input type="date" required placeholder="informe a data da moto" name="ano"/>

        <label>Velocidade</label>
        <input type="number" required placeholder="informe o preço a velocidade da moto" name="velocidade"/>

  <button type="submit">Criar</button>
    </form>
</body>
</html>