<?php
        print "pagina de salvar";
switch ($_REQUEST["acao"]) {
    case 'createUser':
        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];


        $sql = "INSERT INTO usuarios (email, nome, senha) 
        VALUES ('{$email}','{$nome}', '{$senha}')";

        $res = $conn->query($sql);

        if ($res === true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
             print "<script>location.href='?page=views';</script>";
        
        }else{
        print "<script>alert('Erro ao fazer cadastros');</script>";
          print "<script>location.href='?page=views';</script>";
        }
        
        break;

        case 'createMoto':
            $nome = $_POST["nome"];
            $marca = $_POST["marca"];
            $preco = $_POST["preco"];
            $cor = $_POST["cor"];
            $ano = $_POST["ano"];
            $velocidade = $_POST["velocidade"];

            $sql = "INSERT INTO usuarios (nome, marca, preco, cor, ano, velocidade) 
            VALUES ('{$nome}', '{$marca}', '{$preco}', '{$cor}', '{$ano}', '{$velocidade}')";
    
            $res = $conn->query($sql);
    
            if ($res === true) {
                print "<script>alert('Cadastrado com sucesso');</script>";
                 print "<script>location.href='?page=views';</script>";
            
            }else{
            print "<script>alert('Erro ao fazer cadastros');</script>";
              print "<script>location.href='?page=views';</script>";
            }
            
            break;
}
?>