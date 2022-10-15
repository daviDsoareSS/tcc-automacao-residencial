
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
    <title>Document</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!-- CSS BOOTSTRAP only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>  
    <header>
        <div class="container-header">
            <h1>Dashboard</h1>
            <small>Acesso restrito</small>
            <p>Página Inicial</p>
        </div>
        <div class="container-right-header">
            <p>Atendente: <strong>David Soares Silva</strong></p>
        </div>
    </header>
    <?php
    include_once('includes/sidebar.php');
    ?>
    <main>
        <div class="top-main">      
              <input type="search" class="form-control" id="pesquisa-usuarios" >  
              <button onclick="searchData()">Procurar</button>        
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
                    <th>Agendar</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                                echo "<td>".$user_data['idUser']."</td>";
                                echo "<td>".$user_data['email']."</td>";
                                echo "<td>".$user_data['nome']."</td>";
                                echo "<td>".$user_data['dataNasc']."</td>";
                                echo "<td>".$user_data['dataCriacaoConta']."</td>";
                                echo "<td><a href='agendamento.php?id=$user_data[idUser]'><svg class='agenda' clip-rule='evenodd' fill-rule='evenodd' stroke-linejoin='round' stroke-miterlimit='2' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='m21 4c0-.478-.379-1-1-1h-16c-.62 0-1 .519-1 1v16c0 .621.52 1 1 1h16c.478 0 1-.379 1-1zm-3 11.25c0 .414-.336.75-.75.75h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75zm-11.772-.537c-.151-.135-.228-.321-.228-.509 0-.375.304-.682.683-.682.162 0 .324.057.455.173l.746.665 1.66-1.815c.136-.147.319-.221.504-.221.381 0 .684.307.684.682 0 .163-.059.328-.179.459l-2.116 2.313c-.134.147-.319.222-.504.222-.162 0-.325-.057-.455-.173zm11.772-2.711c0 .414-.336.75-.75.75h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75zm-11.772-1.613v.001c-.151-.135-.228-.322-.228-.509 0-.376.304-.682.683-.682.162 0 .324.057.455.173l.746.664 1.66-1.815c.136-.147.319-.221.504-.221.381 0 .684.308.684.682 0 .164-.059.329-.179.46l-2.116 2.313c-.134.147-.319.221-.504.221-.162 0-.325-.057-.455-.173zm11.772-1.639c0 .414-.336.75-.75.75h-4.5c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h4.5c.414 0 .75.336.75.75z' fill-rule='nonzero'/></svg></a></td>";
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