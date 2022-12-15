<?php

    if(!empty($_GET['RA']))
    {
        include_once('conexao.php');

        $RA = $_GET['RA'];

        $sqlSelect = "SELECT *  FROM aluno WHERE RA=$RA";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM aluno WHERE RA=$RA";
            $resultDelete = $conexao->query($sqlDelete);
        }

        
    }
    header('Location: delete.php'); 

    
    
?>