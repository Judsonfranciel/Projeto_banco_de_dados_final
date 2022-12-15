<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['update']))
    {


        $RA = $_POST['RA'];
        $Nome_aluno = $_POST['Nome_aluno'];
        $Sobrenome_aluno = $_POST['Sobrenome_aluno'];
        $Sexo = $_POST['Sexo'];
        $CPF = $_POST['CPF'];
        $Endereco = $_POST['Endereco'];
        $Rua = $_POST['Rua'];
        $Num = $_POST['Num'];
        $CEP = $_POST['CEP'];
        $Filiacao = $_POST['Filiacao'];
        $Status = $_POST['Status'];
        $Telefone = $_POST['Telefone'];
        $Contato = $_POST['Contato'];

        
        $sqlInsert = "UPDATE aluno 
        SET Nome_aluno='$Nome_aluno',Sobrenome_aluno='$Sobrenome_aluno',Sexo='$Sexo',CPF='$CPF',Endereco='$Endereco',Rua='$Rua',Num='$Num',CEP='$CEP',Filiacao='$Filiacao',Status='$Status',Telefone='$Telefone',Contato='$Contato'
        WHERE RA=$RA";
        $result = $conexao->query($sqlInsert);
        print_r($result);
        


    }

  

    header('Location: update.php');
?>
