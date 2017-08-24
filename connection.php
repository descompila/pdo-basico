<?php

/**
 * 
 * @return \PDO
 */
function getConnection(){
    
    $dsn = 'mysql:host=localhost;dbname=mercadophp;charset=utf8';
    $user = 'root';
    $pass = '';

    try {

        $pdo = new PDO($dsn, $user, $pass);
        
        return $pdo;
    } catch (PDOException $ex) {

        echo 'Erro: ' . $ex->getMessage();
    }
}