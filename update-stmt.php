<?php

include './connection.php';

$conn = getConnection();

$sql = 'UPDATE produto SET descricao = :desc, qtd = :qtd, valor = :valor WHERE id = :id';

$descricao = 'Feijão 1';
$qtd = 11;
$valor = 11.80;
$id = 2;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':desc', $descricao);
$stmt->bindParam(':qtd', $qtd);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':id', $id);

if($stmt->execute()){
    echo 'Atualizado com sucesso!';
}else{
    echo 'Erro ao atualizar!';
}