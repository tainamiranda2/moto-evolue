<?php
     //   print "pagina de salvar porwue açgo deu errdo";
switch ($_REQUEST["acao"]) {
    //funcções do usuario
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
        case 'checkUser':
            session_start();
            // print($_POST['email']);
            // var_dump ('oi');
     
             if (empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))) {
                 //redirecionando
                 print "<script>location.href='Moto-evolue/index.php';</script>";
             }
             
                 $email = $_POST['email'];
                 $senha =$_POST['senha'];
     
                 $sql = "SELECT * FROM usuarios 
                 WHERE email= '$email' 
                 AND senha = '$senha' ";
             $res = $conn->query($sql) or die($conn->error);
     
             $row=$res->fetch_object();
             $qtd = $res->num_rows;
             if($qtd>0){
                 $_SESSION["email"]=$email;
                 $_SESSION["senha"]=$senha;
                 print "<script>alert('Logado com sucesso');</script>";
                 print "<script>location.href='home.php';</script>";
             }else{
                 print "<script>alert('Erro ao fazer login');</script>";
                 print "<script>location.href='index.php';</script>";
             }
     
     
             break;
    case 'logoutUser':
        session_start();

        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        session_destroy();
        header("Location: index.php");

        break;    
        case 'createMoto':
            $nome = $_POST["nome"];
            $marca = $_POST["marca"];
            $preco = $_POST["preco"];
            $cor = $_POST["cor"];
            $ano = $_POST["ano"];
            $velocidade = $_POST["velocidade"];

            $sql = "INSERT INTO moto (nome, marca, preco, cor, ano, velocidade) 
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
            //funções do crud
            case 'edit':
          $nome = $_POST["nome"];
            $marca = $_POST["marca"];
            $preco = $_POST["preco"];
            $cor = $_POST["cor"];
            $ano = $_POST["ano"];
            $velocidade = $_POST["velocidade"];

            $sql = "UPDATE moto SET
            nome  = '{$nome}', 
            marca =  '{$marca}',
            preco =  '{$preco}',
            cor ='{$cor}', 
            ano='{$ano}',
            velocidade = '{$velocidade}'
            WHERE id=".$_REQUEST["id"];
    
            $res = $conn->query($sql);
        
        $res=$conn->query($sql);
        
            if($res ==true){
                print "<script>alert('Editado com sucesso');</script>";
             
                print "<script>location.href='?page=views';</script>";
        
            }else{
                print "<script>alert('Erro ao editar');</script>";
               
               print "<script>location.href='?page=views';</script>";
        
            }
              break;

            case 'delete':
                $sql = "DELETE FROM moto WHERE id=" . $_REQUEST["id"];
                
        $res=$conn->query($sql);
        
        if($res ==true){
            print "<script>alert('Excuido com sucesso');</script>";
         
            print "<script>location.href='?page=views';</script>";
        
        }else{
            print "<script>alert('Erro ao excluir');</script>";
           
           print "<script>location.href='?page=views';</script>";
        
        }
                break;

   
    }
?>