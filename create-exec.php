<?php

include './connection.php';

$conn = getConnection();

$sql = "INSERT INTO produto (descricao,qtd,valor) VALUES ('Arroz',30,'4.50')";

if($conn->exec($sql)){
    echo 'Salvo com sucesso!';
}else{
    echo 'Erro ao salvar!';
}