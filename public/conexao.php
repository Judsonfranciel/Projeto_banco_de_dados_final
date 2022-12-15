<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'test';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName) or die ('Não foi possível conectar');