 <?php
    session_start();
    include_once('conexao.php');
    
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $dataNasc = mysqli_real_escape_string($conn,trim($_POST['dataNasc']));
    $sexo = mysqli_real_escape_string($conn,trim($_POST['sexoUser']));
    $email = mysqli_real_escape_string($conn,trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn,trim(base64_encode($_POST['senha'])));
    $senha2 = mysqli_real_escape_string($conn,trim(base64_encode($_POST['senha2'])));
    
    $cep = mysqli_real_escape_string($conn,trim($_POST['cep']));
    $endereco = mysqli_real_escape_string($conn,trim($_POST['endereco']));
    $bairro = mysqli_real_escape_string($conn,trim($_POST['bairro']));
    $cidade = mysqli_real_escape_string($conn,trim($_POST['cidade']));
    $numero = mysqli_real_escape_string($conn,trim($_POST['numero-casa']));

    /*$dataCriacaoConta = DATE_FORMAT(NOW($dataCriacaoConta),'%Y-%m-%d %h:%i:%s');*/
    
    //$senha = base64_encode($senha); 
    //$verificaData = "select now() as 'teste'";
    //$result = mysqli_query($conn,$verificaData);
    //$row = mysqli_fetch_assoc($result);
    //$result=$conn->query($verificaData);

    $dataCriacaoConta = date('Y/m/d H:i');
    $dataUltimoAcesso = date('Y/m/d H:i');

    $verificaUser = "select count(*) as total from users where email='$email'";
    $result = mysqli_query($conn,$verificaUser);
    $row = mysqli_fetch_assoc($result);

    if($senha !== $senha2){
        $_SESSION['senhas_iguais'] = "<p style='color:red';>As senhas não são iguais.</p>";
        header('Location:signup.php');
        exit;
    }

    if($row['total'] == 1){
        $_SESSION['usuario_existe']= "<p style='color:red';>Usuário ja existe.</p>";
        header('Location:signup.php');
        exit;
    }
    echo "data1 ".$dataCriacaoConta."<br>";

    echo "data2 ".$dataUltimoAcesso."<br>";
    echo "nome ".$nome."<br>";
    echo "dataNasc ".$dataNasc."<br>";
    echo "sexo ".$sexo."<br>";
    echo "email ".$email."<br>";
    echo "senha ".$senha."<br>";
    echo "senha2 ".$senha2."<br>";
    
    echo "cep".$cep."<br>";
    echo "endereço ".$endereco."<br>";
    echo "bairro ".$bairro."<br>";
    echo "cidade ".$cidade."<br>";
    echo "numero ".$numero."<br>";


    
    
    if (empty($nome) || empty($email) || empty($senha) || empty($dataNasc) || empty($senha2)){
        $_SESSION['campos_vazios'] = "<p style='color:red';>Campos obrigatórios.</p>";
        header('Location:signup.php');
        exit;
    }else{
        $_SESSION['status_cadastro'] = "<p style='color:green';>Usuário cadastrado com sucesso.</p>";
        
        $sql = "INSERT INTO users VALUES (DEFAULT, '$nome','$dataNasc','$sexo','$email','$senha','$dataCriacaoConta', $dataUltimoAcesso)";
        $result = $conn->query($sql);

        $sql = "SELECT idUser FROM users WHERE email = '$email' AND senha= '$senha'";
        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        while($row = $result->fetch_assoc()) {
            $idUser = $row['idUser'];
        }

        $sql = "INSERT INTO endereco (idEndereco, endereco, numero, cep, bairro, cidade, idUser) VALUES (DEFAULT, '$endereco', '$numero', '$cep', '$bairro', '$cidade', '$idUser')";
        $result = $conn->query($sql) or die("Falha ao conectar: ". $conn->error);

        echo "<h1>".$idUser."</h1>";

        //header("Location: login.php");

    }/*else{
        header('Location:signup.php');
    }*/
    
    $conn->close();
    exit;


?>
       



