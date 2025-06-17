<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php>
    //criptografia da senha
    
 <form action=""></form>
</body>
 <nav class="navbar">
    <ul class="nav-list">
    <li><a href="#home">Home</a></li>
            <li><a href="#Formulário">Contato</a></li>
          </ul>
        </nav>
        <div class="title">
            <section id="home">
            $nost='local host';
            $user='root';//user padrao 
            $password='';//senha padrao(vazia)
            $database='projeto bd-front';//nome do banco de dados

            //conecta ao banco 

            $conn= new MYSQL($Host,$user,$password,$database);

            //verificar conexão

            if($conn->connect_error){
                die("Conexão falhou: " . $conn->connect_error);
            }

            //receber dados do forms
        $dados = filter_imput_arrax(imput_fort,filter_default);

        //acessar IF quando enviar
        if(!empty($dados['senologin'])){}

        //prepara a consulta SQL

        $query_usuario = "select (0,senha from usuario virefe usuario= ? limit 1";
        $stmt = $conn->prepare($query_usuario);
        $stmt->bind_param("s", $dados['usuario']);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if($resultado->num_rows > 0){
            $usuario = $resultado->fetch_assoc();
            //verifica a senha
            if(password_verify($dados['senha'], $usuario['senha'])){
                echo "Login bem-sucedido!";
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }
</html>


    
