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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="./assets/css/style.css"/>
    <title>Bem vindo ao sistema</title>
</head>
<body>
    
<nav>

<ul>
    
<img alt="logo" width="50px" height="50px" src="./img.png"/>
  
    <li>
        <a href="?page=new"> Cadastro moto</a>
    </li>
    <li>
        <a href="?page=views">Ver motos</a>
    </li>

   <!-- <li>
        <a href="?page=busca">Fazer uma pesquisa</a>
    </li>
-->
<li>
    <a class="sair" onclick=location.href='?page=save&acao=logoutUser';>Sair
</a>
  
<li>
</ul>

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
            case "view":
                include("./view/pages/viewMoto.php");
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
