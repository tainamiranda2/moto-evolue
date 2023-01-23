<!DOCTYPE html>

<html lang="pt-br">
    <head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b107f3388e.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css"/>
</head>
    <title>Moto-evolue</title>
    <body>
    <nav>
   
<ul>
    
<img alt="logo" width="50px" height="50px" src="./img.png"/>

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
        print "  <h2><strong>Nome</strong>: Honda CG 160</h2>";
        print "  <p><strong>Marca</strong>: Honda</p>";
        print "  <p><strong>Cor</strong>: Vermelha</p>";
        print "  <p><strong>Velocidade</strong>: 160KM</p>";
        print "  <p><strong>Ano</strong> 31/08/2022</p>";
        print "  <p><strong>Preço</strong>: 5000,00</p>";
        print "<p><strong>Comentário</strong>: Uma boa marca pode comprar que é confiavel.</p>";
       print "</section>";
        print " </article>";           
        
    }
?>
    </body>

    </html>