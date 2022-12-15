<?php

    if(isset($_POST['submit']))
    {

        include_once('conexao.php');

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
        $Contato   = $_POST['Contato'];
        $Telefone   = $_POST['Telefone'];


        $result = mysqli_query($conexao, "INSERT INTO aluno(RA,Nome_aluno,Sobrenome_aluno,Sexo,CPF,Endereco,Rua,Num,CEP,Filiacao,Status,Contato,Telefone) 
        VALUES ('$RA','$Nome_aluno','$Sobrenome_aluno','$Sexo','$CPF','$Endereco','$Rua','$Num','$CEP','$Filiacao','$Status','$Contato','$Telefone')");

    header('Location: home.php');
   
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO ALUNO</title>
     <style>
       

    /* Estilização do corpo do texto*/
       body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(248,248,255), rgb(248,248,255));
        }
        
    /* Estilização da Caixa de Dados*/
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
    /* Legenda no Topo*/
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
    /* Dados na caixa de texto*/
        .inputBox{
            position: relative;
        }
    /* Estilização da caixa de texto*/
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
    /* Estilização do topo*/
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
    /* Estilização das perguntas*/
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: black;
        }
    
    /* Estilização do botão enviar*/
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
    
    /* Efeito do botão enviar*/
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="create.php" method="POST">
            <fieldset>
                <legend><b>Cadastrar Aluno</b></legend>
                <br>


                <div class="inputBox">
                    <input type="text" name="RA" ra="RA" class="inputUser" required>
                    <label for="RA" class="labelInput">Registro do Aluno</label>
                </div>
                <br>

                <div class="inputBox">
                    <input type="text" name="Nome_aluno" ra="Nome_alunonome" class="inputUser" required>
                    <label for="Nome_aluno" class="labelInput">Nome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Sobrenome_aluno" id="Sobrenome_aluno" class="inputUser" required>
                    <label for="Sobrenome_aluno" class="labelInput">Sobrenome</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Sexo" id="Sexo" class="inputUser" required>
                    <label for="Sexo" class="labelInput">Sexo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="CPF" id="CPF" class="inputUser" required>
                    <label for="CPF" class="labelInput">CPF</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Endereco" id="Endereco" class="inputUser" required>
                    <label for="Endereco" class="labelInput">Endereço</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Rua" id="Rua" class="inputUser" required>
                    <label for="Rua" class="labelInput">Rua</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="Num" name="Num" id="Num" class="inputUser" required>
                    <label for="Num" class="labelInput">Numero</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="CEP" id="CEP" class="inputUser" required>
                    <label for="CEP" class="labelInput">CEP</label>
                </div>
                <br>

                <div class="inputBox">
                    <input type="Num" name="Filiacao" id="Filiacao" class="inputUser" required>
                    <label for="Filiacao" class="labelInput">Filiacão</label>
                </div>
                <br>

                <div class="inputBox">
                    <input type="text" name="Status" id="Status" class="inputUser" required>
                    <label for="Status" class="labelInput">Status</label>
                </div>
                <br>

                <div class="inputBox">
                    <input type="Num" name="Contato" id="Contato" class="inputUser" required>
                    <label for="Contato" class="labelInput">Contato</label>
                </div>
                <br>

                <div class="inputBox">
                    <input type="Num" name="Telefone" id="Telefone" class="inputUser" required>
                    <label for="Telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>                 
                <?php
    if (isset($_POST["acao"])){
    echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
    }
?>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <a href="home.php"><img src="icones/arrow-return-left.svg" alt="Voltar" width="40" height="40"></a>
    
</body>
</html>