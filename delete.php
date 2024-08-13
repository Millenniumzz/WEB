<?php session_start(); 
if(!isset($_SESSION['id'])&& $_SESSION['role']=='a'){
    header("Location:index.php");
    die();
}else
    $id=$_GET['id'];
    echo "ลบกระทู้ หมายเลข $id"

?>