<?php

ini_set('display_errors', 1); 
error_reporting(E_ALL);
session_start();

require_once '../classes/Database.php';

$usuario=$_SESSION['usuario'];
$encuesta=1;
$nombre=$_POST['nombre'];
$ciudad=$_POST['ciudad'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$comment=$_POST['comment'];


$pdo = new Database();

$pdo->query("INSERT INTO encuestas (username, nombre, ciudad, p1, p2, p3, p4, comment) VALUES (:username, :nombre, :ciudad, :p1, :p2, :p3, :p4, :comment)");
$pdo->bind(':username', $usuario);
$pdo->bind(':nombre', $nombre);
$pdo->bind(':ciudad', $ciudad);
$pdo->bind(':p1', $p1);
$pdo->bind(':p2', $p2);
$pdo->bind(':p3', $p3);
$pdo->bind(':p4', $p4);
$pdo->bind(':comment', $comment);
$pdo->execute();

$reg = $pdo->lastInsertId();
//echo 'El id generado es: '.$pdo->lastInsertId();
if($reg>0){
    $pdo2 = new Database();
    $pdo2->query("UPDATE users SET encuesta=1 WHERE username=:username");
    $pdo2->bind(':username', $usuario);
    $pdo2->execute();
    $_SESSION['encuesta']=1;
    echo 'success';
}else{
    $_SESSION['encuesta']=0;
    echo 'error';
}