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
<li>
        <a href="?home.php">Home</a>
    </li>
  
    <li>
        <a href="?page=new"> Cadastrar moto</a>
    </li>
    <li>
        <a href="?page=views">Ver motos</a>
    </li>
  
<a class="sair" onclick=location.href='?page=save&acao=logoutUser';>Sair
</a>
</ul>

</nav>

    <?php  

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
               default:
               print "<h2>Olá, ".$_SESSION["email"]." </h2>";
               print "<p>o objetivo do projeto é criar um sistema onde é possivel cadastrar infomarmações sobre motos. </p>";
               print "<img width='100%'; class='imagemC' alt='exemplo de moto ilustrativa' src='./assets/img/moto.png'/>";
    }
    ?>

<footer>
    <span>&copy;2022 - Tainá Miranda<span>

  
    <a href="https://github.com/tainamiranda2" class="fa fa-github"></a>
    <a href="https://www.linkedin.com/in/tain%C3%A1-miranda-b337b3145" class="fa fa-linkedin"></a>

</footer>
</body>
</html>
