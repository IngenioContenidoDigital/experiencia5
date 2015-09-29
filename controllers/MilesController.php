<?php

ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once '../classes/Database.php';
$user=$_POST['user'];
session_start();

$db = new Database();
//$db->query("SELECT * FROM h0xce_csv WHERE username=:username and month=:month");
$db->query("SELECT h0xce_csv.username, h0xce_csv.goal, h0xce_csv.miles, 
(SELECT SUM(h0xce_csv.accumulated) FROM h0xce_csv WHERE username=:username) AS total_miles,
h0xce_csv.miles_additional, h0xce_csv.month_sales_goal, h0xce_csv.current_sales, h0xce_csv.up_date, 
h0xce_csv.month FROM h0xce_csv
WHERE h0xce_csv.username =:username1 AND h0xce_csv.month =:month");
$db->bind(':username', $user);
$db->bind(':username1', $user);
$db->bind(':month', 'Septiembre');
$result=$db->single();
$total=$db->rowCount();

if($total>0){
    echo json_encode($result);
}else{   
    echo 'error';
}

