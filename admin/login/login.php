<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça login</h1>
    <form>
        <label>E-mail</label>
        <input type="text" placeholder="informe seu E-mail" name="email"/>
        <label>Senha</label>
        <input type="password" placeholder="informe sua senha" name="senha"/>
     
  <button type="submit">Entrar</button>
    </form>
</body>

<?php
include("connection.php");
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email'])==0){
    echo "Preencha sua email";
    }else if(strlen($_POST['senha'])==0){
        echo "Preencha sua senha";
    }else{
        echo "";
    }
}
?>
</html>