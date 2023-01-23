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
 
      <br/>
      <?php
  
    
    //teste para ver se dar certo com pesqu
    //tentando pegar dados
    $sql = "SELECT * FROM moto";

    $res = $conn->query($sql);
    
    $qtd=$res->num_rows;
    if($qtd>0){
        while($row=$res->fetch_object()){
        print "<article>";
        print "<img alt='imagem de moto' src='./img.png' />";
        print "<section>";
        print "<h2><strong>Nome</strong>:".$row->nome."</h2>";
        print "<p><strong>Marca</strong>: ".$row->marca."</p>";
        print "<p><strong>Preço</strong>:".$row->preco."</p>";
        print "<p><strong>Cor</strong>: ".$row->cor."</p>";
      
      /// print "   <li> <a href="/"> Mais deletlhes </a> </li>";
      //    <a href=\"location.href='?page=edit&id=".$row->id."';\"class='editar'>Mais informações</a>
            echo "
          
            <div class='funcoes'>
            <button 
            onclick=\"location.href='?page=edit&id=".$row->id."';\"
             class='fa fa-square editar'>
            Editar
            </button>
            <button  
             class='fa fa-trash excluir'
             
             onclick=\"if(confirm('tem certeza que deseja excluir')){
                location.href='?page=save&acao=delete&id=".$row->id."';}
                else{false;}\"
             >
            Excluir
            </button>
            <button 
            onclick=\"location.href='?page=view&id=".$row->id."';\"
             class='fa fa-square detalhes'>
            Ver mais
            </button>
            </div>
      ";
        print " </article>";
        print "</section>";
        }

        }else{
            print "<p>Não encontrou resultados</p>";
          // print "<a href=\'$=?page=views'\>Public uma nova moto</a>";
        }
    
        ?>

</body>
</html>