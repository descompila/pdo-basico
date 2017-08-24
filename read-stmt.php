<?php

include './connection.php';

$conn = getConnection();

$sql = "SELECT * FROM produto WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", 1);
$stmt->execute();

$result = $stmt->fetchAll();

foreach ($result as $value) {
    
    echo 'Desc: '.$value['descricao'].'<br>';
    
}

