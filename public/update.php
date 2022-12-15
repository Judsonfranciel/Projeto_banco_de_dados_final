<?php
session_start();
include_once('conexao.php');

if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM aluno WHERE RA LIKE '%$data%' or Nome_aluno LIKE '%$data%' ORDER BY RA DESC";
    }
    else
    {
        $sql = "SELECT * FROM aluno ORDER BY RA DESC";
    }

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Administração de Dados Escolares</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <title>ATUALIZAR DADOS ALUNO</title>
    </button>
      </form>
    </div>
  </div>
</nav>

<style>
    body{
        background: linear-gradient(to right, rgb(248,248,255), rgb(248,248,255));
        color: white;
        text-align: center;
    }
    .table-bg{ 
    background: rgba(0,0,0,0.3);
    border-radius: 15px 15px 0 0;
    }
    .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
</style>

</head>

<body>
<br>
<div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    
    <div class="m-5">
        <table class="table text-black table-bg">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Num</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Filiacão</th>
                    <th scope="col">Status</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">...</th>

                </tr>
            </thead>
            <tbody>

                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['Nome_aluno']."</td>";
                        echo "<td>".$user_data['Sobrenome_aluno']."</td>";
                        echo "<td>".$user_data['Sexo']."</td>";
                        echo "<td>".$user_data['CPF']."</td>";
                        echo "<td>".$user_data['Endereco']."</td>";
                        echo "<td>".$user_data['Rua']."</td>";
                        echo "<td>".$user_data['Num']."</td>";
                        echo "<td>".$user_data['CEP']."</td>";
                        echo "<td>".$user_data['Filiacao']."</td>";
                        echo "<td>".$user_data['Status']."</td>";
                        echo "<td>".$user_data['Contato']."</td>";
                        echo "<td>".$user_data['Telefone']."</td>";
                        echo "<td>
                        
                        <a class='btn btn-sm btn-primary' href='update2.php?RA=$user_data[RA]' title='Editar'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                        </a> 
                        
                        </td>";
                        echo "</tr>";

                    }
                ?>

            </tbody>
        </table>
    </div>
    <a href="home.php"><img src="icones/arrow-return-left.svg" alt="Voltar" width="40" height="40"></a>
</body>
</html>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-static/">

<link href="bootstrap.min.css" rel="stylesheet">
    

  </body>

  
  <script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'update.php?search='+search.value;
    }
</script>
</html>
