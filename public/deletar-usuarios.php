
<?php
    session_start();

    include_once('conexao.php');
    

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM  users WHERE idUser LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY idUser DESC";
    }
    else{
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
    <title>Dashboard | 4House</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!-- CSS BOOTSTRAP only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>  
    <?php
        include_once('includes/header-dashboard.php');
    ?>
    <div class="sidebar">
        <nav>
            <a href="dashboard.php"><img src="img/logo/logo-4house.png" alt="logo 4house"></a>
        </nav>
        <div class="container-sidebar">
            <ul>
                <a href="dashboard.php"><li class="">Interface</li></a>
                <a href="editar-usuarios.php"><li class="">Editar usuários</li></a>
                <a href="deletar-usuarios.php"><li class="selected">Deletar usuários</li></a>
            </ul>    
        </div>
    </div>
    <main>
        <div class="top-main">      
              <input type="search" class="form-control" id="pesquisa-usuarios" >  
              <button onclick="searchData()">Procurar</button>    
              <label for="option">Filtrar</label>
              <select name="filtro" id="filtro">
                <option value="todos-usuarios">Todos</option>
                <option value="ordem-crescente">Ordem crescente</option>
                <option value="ordem-decrescente">Ordem decrescente</option>
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
                    <th>Excluir</th>
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
                                echo "<td data-title='DataCriacaoConta'>".$user_data['dataCriacaoConta']."</td>";
                                echo "<td data-title='Deletar usuário'><a href='deletar-usuarios.php?id=$user_data[idUser]'><img src='img/dashboard/icon/delete.png'class='agenda'></a></td>";
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
        
        search.addEventListener("keydown", function(event){
            if(event.key === "Enter"){
                searchData();
            }
        });

        function searchData(){   
            window.location = 'dashboard.php?search='+ search.value;
        }
    </script>
</body>
</html>