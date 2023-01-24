<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça cadastro</h1>
    <form action="?page=save"  method="POST">
    <input type="hidden" name="acao" value="createUser" >
        <label>E-mail</label>
        <input type="text" placeholder="informe seu E-mail" required name="email"/>
        <label>Nome</label>
        <input type="text" placeholder="informe seu nome" required name="nome"/>
        <label>Senha</label>
        <input type="password" placeholder="informe sua senha" required name="senha"/>
  <button type="submit">Cadastrar</button>
    </form>
</body>
<?php

?>
</html>