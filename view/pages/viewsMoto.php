<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Todos as motos cadastradas</h1>
    <?php
    $sql = "SELECT * FROM moto";

    $res = $conn->query($sql);
    
    $qtd=$res->num_rows;
    if($qtd>0){
        while($row=$res->fetch_object()){
    print " <article>";
        print "  <h2>Nome</h2>";
        print "  <p>Cor</p>";
        print "  <p>Velocidade</p>";
       print "   <li> <a href="/"> Mais deletlhes </a> </li>";
        print " </article>";
        }
        }else{
            print "<p>Não encontrou resultados</p>";
        }
    
        ?>
</body>
</html>