<?php
require_once("../dbconfig.php");
$db=require_once("../Database.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tableName = 'apply';
    $requiredFields = ['name', 'number', 'email', 'program', 'message'];
    $data = $_POST;
    $insertPrama= ["name"=>$_POST['name'],"number"=>$_POST['number'], "email"=>$_POST['email'],"program"=>$_POST['program'],"message"=>$_POST['message']];
    if($db->Insert($tableName,$insertPrama)){
        $_SESSION['success']="Success";
    }
    header("Location: " . BASE );
    exit();
}