<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'rigelo';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/* if($conexao->connect_errno)

{
    echo 'erro';
}
else
{
    echo 'conexao feita com sucesso';
}  */
