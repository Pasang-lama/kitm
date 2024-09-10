<?php
require_once("../dbconfig.php");
$db=require_once("../Database.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tableName = 'contact';
    $requiredFields = ['name', 'number', 'email', 'message'];
    $data = $_POST;
    $insertPrama= ["name"=>$_POST['name'],"number"=>$_POST['number'], "email"=>$_POST['email'],"message"=>$_POST['message']];
    // print_r($insertPrama);
    if($db->Insert($tableName,$insertPrama)){
        $_SESSION['success']="Success";
    }
    header("Location: " . BASE ."contact" );
    exit();
}
