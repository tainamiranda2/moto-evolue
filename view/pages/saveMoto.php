<?php
     //   print "pagina de salvar porwue açgo deu errdo";
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

    case 'checkUser':
        print($_POST['email']);

        if(isset($_POST['email']) || isset($_POST['senha'])){
            if(strlen($_POST['email'])==0){
            print "Preencha sua email";
            }else if(strlen($_POST['senha'])==0){
            print "Preencha sua senha";
            }else{
                $email = $conn->real_escape_string($_POST['email']);
                $senha = $conn->real_escape_string($_POST['senha']);
        
                $sql_code = "SELECT * FROM usuarios WHERE email= '$email' AND senha = '$senha' ";
        
                $sql_query = $conn->query($sql_code) or die("Falha da execução do código");
        
                //verifcndo a quantidade de registro
                $quantidade = $sql_query->num_rows;
                
               /* if($quantidade==1){
                    $usuario=$sql_query->fetch_assoc();
        
                    if(!isset($_SESSION)){
                        session_status();
                    }
        
                    $_SESSION(['id']=$usuario['id']);
        
                    $_SESSION(['nome']=$usuario['nome']);
                    //redirecionando
                    header("Location:page=views");
                }else{
                    print "Faha ao logar! Senha e email estão incorretas";
                }*/
            }
        }
        break;
}
?>