
<?php
    session_start();

    include_once('conexao.php');
    

    if(!empty($_GET['search'])){

        $data = $_GET['search'];
        $filtro = $_GET["#filtro"];

        if($filtro == "todos-usuarios"){

            $sql = "SELECT * FROM  users WHERE idUser LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%'";

        }else if($filtro == "ordem-crescente"){

            $sql = "SELECT * FROM  users WHERE idUser LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY idUser ASC";

        }else if($filtro == "ordem-decrescente"){

            $sql = "SELECT * FROM  users WHERE idUser LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY idUser DESC";

        }

        $sql = "SELECT * FROM  users WHERE idUser LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY idUser DESC";

    }else{
        $sql = "SELECT * FROM  users ORDER BY idUser DESC";
    }
   

    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuários | 4House</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!-- CSS BOOTSTRAP only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>  
    
<div id="preloader">
    <div class="inner">
     <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! --> 
       <img src="img/gif/dashboard.gif" alt="preloader">
    </div>
</div>    

    <?php
        include_once('includes/header-dashboard.php');
    ?>
    <div class="sidebar">
        <nav>
            <a href="dashboard.php"><img src="img/logo/logo-4house.png" alt="logo 4house"></a>
        </nav>
        <div class="container-sidebar">
            <ul>
                <a href="dashboard.php"><img src="img/dashboard/icon/home.png" alt=""><li class="">Interface</li></a>
                <a href="editar-usuarios.php"><img src="img/dashboard/icon/edit.png" alt=""><li class="selected">Editar usuários</li></a>
                <a href="deletar-usuarios.php"><img src="img/dashboard/icon/apagar.png" alt=""><li class="">Deletar usuários</li></a>
            </ul>    
        </div>
        <div class="container-sidebar-opcoes-admin">
            <hr>
            <ul>
                <p>*Acesso exclusivo</p>
                <a href="dashboard.php"><li class="">Dados atendentes</li></a>
                <a href="editar-usuarios.php"><li class="">Editar atendentes</li></a>
                <a href="deletar-usuarios.php"><li class="">Deletar atendentes</li></a>
            </ul>    
        </div>
    </div>
    <main>

        <div class="top-main">      
            
            <input type="search" class="form-control" id="pesquisa-usuarios" placeholder="Pesquisar usuário...">  
            <button onclick="searchData()">Procurar</button>    
            <label for="option">Filtrar</label>
            <select name="filtro" id="filtro">

                <option value="todos-usuarios">Todos</option>
                <option value="ordem-crescente">Ordem crescente</option>
                <option value="ordem-decrescente" selected>Ordem decrescente</option>
            
            </select>    
        </div>
        <div class="container-main">
            <table border="1">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Data de criação da conta</th>
                    <th>Editar</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                                echo "<td data-title='id'>".$user_data['idUser']."</td>";
                                echo "<td data-title='Email'>".$user_data['email']."</td>";
                                echo "<td data-title='Nome'>".$user_data['nome']."</td>";
                                echo "<td data-title='DataNasc'>".$user_data['dataNasc']."</td>";
                                echo "<td data-title='Inicio da conta'>".$user_data['dataCriacaoConta']."</td>";
                                echo "<td data-title='Editar usuário'><a href='editando-usuario.php?id=$user_data[idUser]'><img src='img/dashboard/icon/editar.png'class='agenda'></a></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
             </table>
        </div>
    </main>
    <script>
        /*SISTEMA DE BUSCA NO DASHBOARD*/
        const search = document.getElementById('pesquisa-usuarios');
        const filtro = document.getElementByID('filtro');
        const opcaoValor = filtro.options[filtro.selectedIndex].value;
        
        search.addEventListener("keydown", function(event){
            if(event.key === "Enter"){
                searchData();
            }
        });

        function searchData(){   
            window.location = 'editar-usuarios.php?search='+ search.value;
        }
    </script>
</body>
</html>