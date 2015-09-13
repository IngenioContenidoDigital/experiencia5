<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once '../classes/Database.php';
$opcion=$_GET['option'];
session_start();
if($opcion=='inicio'){
    $user=$_POST['user'];
    $pass=md5($_POST['pass']);

    $db = new Database();
    $db->query("SELECT username, name, email, encuesta FROM users WHERE (username=:username AND password=:password)");
    $db->bind(':username', $user);
    $db->bind(':password', $pass);
    $result=$db->single();
    $total=$db->rowCount();
if($total>0){
    //$result=$db->single();
    
    $_SESSION['usuario']=$result['username'];
    $_SESSION['nombre']=$result['name'];
    $_SESSION['encuesta']=$result['encuesta'];
    //echo 'success';
    header('location: ../home.php');
}else{
    session_unset();
    session_destroy();
    $_SESSION['usuario']="";
    unset($_SESSION['usuario']);
    //echo 'error';
    header('location: ../?aviso=error');
}}

if($opcion=='cierre'){
    session_unset();
    session_destroy();
    header('location: ../');
    exit();
}