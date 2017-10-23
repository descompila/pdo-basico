<?php

include './connection.php';

$conn = getConnection();

$sql = 'DELETE FROM produto WHERE id = :id';

$id = 2;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);


if($stmt->execute()){
    echo 'Excluido com sucesso!';
}else{
    echo 'Erro ao excluir!';
}