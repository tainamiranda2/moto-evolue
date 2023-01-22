<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css"/>
    <title>Bem vindo ao sistema</title>
</head>
<body>
<nav>
<ul>
  
    <li>
        <a href="?page=new"> Cadastro moto</a>
    </li>
    <li>
        <a href="?page=views">Ver motos</a>
    </li>
    
</ul>
<button onclick=location.href='?page=save&acao=logoutUser';>Sair</button>
</nav>
    <?php
   // print "Olá, sou a página home ".$_SESSION["email"];
   /* arquivo de conexão com o banco*/
include("./config/connection.php");
    switch (@$_REQUEST["page"]) {
        case "new":
            include("./view/pages/newMoto.php");
            break;
        case "views":
            include("./view/pages/viewsMoto.php");
            break;
        case "save":
            include("./view/pages/saveMoto.php");
            break;
        case "edit":
            include("./view/pages/editMoto.php");
            break;
            case "busca":
                include("./view/pages/searchMoto.php");
                break;
               
    }
    ?>
</body>
</html>
