<?php
    include_once('conexao.php');

    if(!empty($_GET['RA']))
    {
        $RA = $_GET['RA'];
        $sqlSelect = "SELECT * FROM aluno WHERE RA=$RA";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $Nome_aluno = $user_data['Nome_aluno'];
                $Sobrenome_aluno = $user_data['Sobrenome_aluno'];
                $Sexo = $user_data['Sexo'];
                $CPF = $user_data['CPF'];
                $Endereco = $user_data['Endereco'];
                $Rua = $user_data['Rua'];
                $Num = $user_data['Num'];
                $CEP = $user_data['CEP'];
                $Filiacao = $user_data['Filiacao'];
                $Status = $user_data['Status'];
                $Contato = $user_data['Contato'];
                $Telefone = $user_data['Telefone'];
            }
        }
        else

        {
            header('Location: update.php');
        }
    }
    else
    {
        header('Location: update.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR CADASTRO ALUNO</title>
     <style>
       
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
        <form action="saveupdate.php" method="POST">
            <fieldset>
                <legend><b>Editar Aluno</b></legend>
                
                <br><br> 
                <div class="inputBox">
                    <input type="text" name="Nome_aluno" id="Nome_aluno" class="inputUser" value=<?php echo $Nome_aluno;?> required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>

                <br>
                <div class="inputBox">
                    <input type="text" name="Sobrenome_aluno" id="Sobrenome_aluno" class="inputUser" value=<?php echo $Sobrenome_aluno;?> required>
                    <label for="Sobrenome_aluno" class="labelInput">Sobrenome</label>
                </div>

                <br>
                <div class="inputBox">
                    <input type="text" name="Sexo" id="Sexo" class="inputUser" value=<?php echo $Sexo;?> required>
                    <label for="Sexo" class="labelInput">Sexo</label>
                </div>

                <br>
                <div class="inputBox">
                    <input type="text" name="CPF" id="CPF" class="inputUser" value=<?php echo $CPF;?> required>
                    <label for="CPF" class="labelInput">CPF</label>
                </div>

                <br>
                <div class="inputBox">
                    <input type="text" name="Endereco" id="Endereco" class="inputUser" value=<?php echo $Endereco;?> required>
                    <label for="Endereco" class="labelInput">Endereço</label>
                </div>
                
                <br>
                <div class="inputBox">
                    <input type="text" name="Rua" id="Rua" class="inputUser" value=<?php echo $Rua;?> required>
                    <label for="Rua" class="labelInput">Rua</label>
                </div>
                
                <br>
                <div class="inputBox">
                    <input type="text" name="Num" id="Num" class="inputUser" value=<?php echo $Num;?> required>
                    <label for="Num" class="labelInput">Num</label>
                </div>
                
                <br>
                <div class="inputBox">
                    <input type="text" name="CEP" id="CEP" class="inputUser" value=<?php echo $CEP;?> required>
                    <label for="CEP" class="labelInput">CEP</label>
                </div>
                
                <br>
                <div class="inputBox">
                    <input type="text" name="Filiacao" id="Filiacao" class="inputUser" value=<?php echo $Filiacao;?> required>
                    <label for="Filiacao" class="labelInput">Filiacao</label>
                </div>
                
                <br>
                <div class="inputBox">
                    <input type="text" name="Status" id="Status" class="inputUser" value=<?php echo $Status;?> required>
                    <label for="Status" class="labelInput">Status</label>
                </div>
                
                <br>
                <div class="inputBox">
                    <input type="num" name="Contato" id="Contato" class="inputUser" value=<?php echo $Contato;?> required>
                    <label for="Contato" class="labelInput">Contato</label>
                </div>
                
                <br>
                <div class="inputBox">
                    <input type="num" name="Telefone" id="Telefone" class="inputUser" value=<?php echo $Telefone;?> required>
                    <label for="Telefone" class="labelInput">Telefone</label>
                </div>
                
                <br><br> 
				<input type="hidden" name="RA" value=<?php echo $RA;?>>
                <input type="submit" name="update" id="submit">
                
  
            </fieldset>
        </form>
    </div>

    <a href="home.php"><img src="icones/arrow-return-left.svg" alt="Voltar" width="40" height="40"></a>


</body>
</html>