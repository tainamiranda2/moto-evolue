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
<!--
<form action="?page=busca" method="post">
<input name="pesquisa" type="text" placeholder="Faça uma pesquisa">
<button type="submit">Pesquisar</button>
</form>
-->
      <br/>

      <?php
  
  
    $sql = "SELECT * FROM moto";

    $res = $conn->query($sql);
    
    $qtd=$res->num_rows;
    if($qtd>0){

        while($row=$res->fetch_object()){
        print "<article >";
        print "<img src='./assets/img/moto.png'/>";
        print "<section >";
        print "<h2><strong>Nome</strong>:".$row->nome."</h2>";
        print "<p><strong>Marca</strong>: ".$row->marca."</p>";
        print "<p><strong>Preço</strong>:".$row->preco."R$</p>";
        print "<p><strong>Cor</strong>: ".$row->cor."</p>";
        print "</section>";
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
            class='fa fa-search detalhes'
            onclick=\"location.href='?page=view&id=".$row->id."';\"
            >
            Detalhes
            </button>
            </div>
      ";
       
        print " </article>";
      
        }

        }else{
            print "<p>Não encontrou resultados</p>";
          
        }
    
        ?>

</body>
</html>