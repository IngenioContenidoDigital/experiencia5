<?php

ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once '../classes/Database.php';
$user=$_POST['user'];
session_start();

$db = new Database();
$db->query("SELECT * FROM h0xce_csv WHERE username=:username");
$db->bind(':username', $user);
$result=$db->single();
$total=$db->rowCount();

if($total>0){
    echo json_encode($result);
}else{   
    echo 'error';
}

