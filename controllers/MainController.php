<?php

ini_set('display_errors', 1); 
error_reporting(E_ALL);

require_once '../classes/Database.php';
$pdo = new Database();

$pdo->query("INSERT INTO users (username, password, email, name) VALUES (:username, :password, :email, :name)");
$pdo->bind(':username', 'pintuco');
$pdo->bind(':password', md5('P1ntuc02015'));
$pdo->bind(':email', 'andres.mejia@difumarket.com');
$pdo->bind(':name', utf8_encode('Carlos Andres Mejia'));
$pdo->execute();
echo 'El id generado es: '.$pdo->lastInsertId();


