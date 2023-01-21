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


    //tentando pegar dados
    $sql = "SELECT * FROM moto";

    $res = $conn->query($sql);
    
    $qtd=$res->num_rows;
    if($qtd>0){
        while($row=$res->fetch_object()){
        print "<article>";
        print "<h2>".$row->nome."</h2>";
        print "<p>".$row->marca."</p>";
        print "<p>".$row->preco."</p>";
        print "<p>".$row->cor."</p>";
      /// print "   <li> <a href="/"> Mais deletlhes </a> </li>";
            echo "
            <a
            href=\"location.href='?page=edit&id=".$row->id."';\"
             class='editar'>
            Mais informações
            </a>
            
            <div class='funcoes'>
            <button 
            onclick=\"location.href='?page=edit&id=".$row->id."';\"
             class='editar'>
            Editar
            </button>
            <button  
            class='excluir'
             onclick=\"if(confirm('tem certeza que deseja excluir')){
                location.href='?page=save&acao=delete&id=".$row->id."';}
                else{false;}\"
             >
            Excluir
            </button>
            </div>
      ";
        print " </article>";
        }

        }else{
            print "<p>Não encontrou resultados</p>";
          // print "<a href=\'$=?page=views'\>Public uma nova moto</a>";
        }
    
        ?>

</body>
</html>