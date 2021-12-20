<?php
session_start();
if(isset($_SESSION['email'])&& $_SESSION['email']=="asd@gmail.com"){
    $status=true;
    $url="./panel.php";
    header("Location:".$url);
    exit();
}else{
    $status=true;
    $email=$_SESSION['email'];
    $url="./panel.php";
    header("Location:$url");
    exit();
}
