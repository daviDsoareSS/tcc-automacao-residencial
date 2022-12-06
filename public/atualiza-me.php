<?php
    include_once('conexao.php');

    if(isset($_POST['update'])){
 
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $dataNasc = $_POST['dataNasc'];
        $sexo = $_POST['sexoUser'];
        $email = $_POST['email'];
        $tel1 = $_POST['telefone1'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $numero = $_POST['numero'];

        if(isset($_FILES['image'])){

            $img_name = $_FILES['image']['name'];
            $img_type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];
            
            $img_explode = explode('.',$img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if(in_array($img_ext, $extensions) === true){
                $types = ["image/jpeg", "image/jpg", "image/png"];
                if(in_array($img_type, $types) === true){
                    $time = time();
                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name,"img/perfil/".$new_img_name)){
                            
                        $sqlUpdate = "UPDATE users SET nome='$nome', dataNasc='$dataNasc',sexo='$sexo',telefone1='$tel1',email='$email', img='$new_img_name' WHERE idUser='$id'";

                        $result = $conn->query($sqlUpdate);
                    }
                }
            }
        }


        $sqlUpdate = "UPDATE endereco SET endereco='$rua', numero='$numero', cep='$cep', bairro='$bairro', cidade='$cidade'  WHERE idUser='$id'";

        $result = $conn->query($sqlUpdate);
        
    }
    else{
        echo "Não foi possível realizar alterações, tente novamente.";
    }
    
    header("Location: perfil.php");

?>
