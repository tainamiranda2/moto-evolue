<!DOCTYPE html>

<html lang="pt-br">
    <head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css"/>
</head>
    <title>Moto-evolue</title>
    <body>
    <nav>
<ul>
    <li>
        <a href="/moto-evolue/index.php">Home</a>
    </li>
    <li>
        <a href="?page=cadastro"> Cadastre-se</a>
    </li>
    <li>
        <a href="?page=login">Login</a>
    </li>
</ul>

</nav>

<?php
/* arquivo de conexão com o banco*/
include("./config/connection.php");

/**levar as paginas */
    switch(@$_REQUEST["page"]){
        case "cadastro":
            include("./admin/cadastro/cadastro.php");
        break;
        case "login":
            include("./admin/login/login.php");
        break;
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
        default:
        print "<h1>bem vindo! </h1>";
        print " <p>Cadastre suas motos favoritas</p>";
      
        print " <article>";
        print "<img alt='imagem de moto' src='./img.png' />";
        print "<section>";
        print "  <h2>Honda CG 160</h2>";
        print "  <p>Vermelha</p>";
        print "  <p>160 km</p>";
       print "   <button>  deletlhes </button>";
       print "</section>";
        print " </article>";           
        
    }
?>
    </body>

    </html>