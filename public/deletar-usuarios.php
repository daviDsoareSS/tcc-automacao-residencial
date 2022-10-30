<?php

    include_once('conexao.php');

    session_start();

    if(empty($_GET['filtro'])){
        $filtro = "DESC";
    }else{
        $filtro = $_GET['filtro'];
    }

    if(!empty($_GET['search'])){

        $data = $_GET['search'];
        
        $sql = "SELECT * FROM  users WHERE idUser LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY idUser $filtro";

    }else{
        $sql = "SELECT * FROM  users ORDER BY idUser $filtro";
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
    <!-- início do preloader -->
    <div id="preloader">
        <div class="inner">
        <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
        <img src="img/gif/dashboard.gif" alt="preloader">
        </div>
    </div>
    <!--DELETAR USUARIO -->
    <!-- <a href='deletar-usuarios.php?id=$user_data[idUser]'> -->

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
                <a href="editar-usuarios.php"><img src="img/dashboard/icon/edit.png" alt=""><li class="">Editar usuários</li></a>
                <a href="deletar-usuarios.php"><img src="img/dashboard/icon/apagar.png" alt=""><li class="selected">Deletar usuários</li></a>
            </ul>    
        </div>

       

        <div class="container-sidebar-opcoes-admin" id="opcoes-admin">
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
                <option value="DESC">Todos</option>
                <option value="ASC">Ordem crescente</option>
                <option value="DESC">Ordem decrescente</option>
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
                    
                        $i=0;
                        while($user_data = mysqli_fetch_assoc($result)){

                    ?>
                            
                            <tr id="cliente<?php echo$i ?>" style="border: 10px solid black;">
                                <td data-title='id'><?php echo $user_data['idUser'] ?></td>
                                <td data-title='Email'><?php echo $user_data['email'] ?></td>
                                <td data-title='Nome'><?php echo $user_data['nome'] ?></td>
                                <td data-title='DataNasc'><?php echo $user_data['dataNasc'] ?></td>
                                <td data-title='Inicio da conta'><?php echo $user_data['dataCriacaoConta'] ?></td>
                                <td data-title='Deletar usuário' class='btnDelet' onclick="deletBtn()"><img src='img/dashboard/icon/delete.png' class='agenda' data-toggle='modal' data-target='#exampleModalCenter' style='cursor:pointer;'></td>
                            </tr>     
                            
                    <?php 

                            $i++;
                        }

                    ?>    
                    
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Deletar usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border:none !important;">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja excluir o usuário <?php //echo $nome; ?></p>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" style="background-color:red !important; border:none !important;">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script>
        /*SISTEMA DE BUSCA NO DASHBOARD*/
        const search = document.getElementById('pesquisa-usuarios');
        const filtro = document.getElementById('filtro');
        search.addEventListener("keydown", function(event){
            if(event.key === "Enter"){
                searchData();
            }
        });

        function searchData(){   

            opcaoValor = filtro.options[filtro.selectedIndex].value;
    
            window.location = 'deletar-usuarios.php?search='+search.value +'&filtro=' + opcaoValor;
            
        }
    
        /*SISTEMA DE IDENTIFICAÇÃO DO ADMINISTRADOR OU ATENDENTE*/
        const usuario = "<?php echo $_SESSION['usuario']; ?>"

        if(usuario == "Administrador"){
            
            document.getElementById('opcoes-admin').style.visibility = "visible";

        }else{
            document.getElementById('opcoes-admin').style.visibility = "hidden";
        }

/*-------------------------------------------------------------------------------------------------*/
        
        
        function deletBtn(){
            let i;
        
            let btnDelet = document.getElementsByClassName("btnDelet");

            for(i=0; i<btnDelet.length; i++){
                btnDelet[i].parentElement.style.backgroundColor = "green";
            }

            const cliente = document.getElementsByClassName("btnDelet")[1].parentElement.id;

            alert(cliente);

        }

        /*

        $(document).ready(function() {
            $(document.getElementById('btnDelet')).parent().css({
                "background-color": "green",
                "border": "2px solid green"
            });
        });
*/
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</body>
</html>