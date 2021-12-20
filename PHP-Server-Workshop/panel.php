<?php
session_start();
$email=$_SESSION['email'];

if($_SESSION['email']=="asd@gmail.com"){
    echo "welcom to the session $email";echo "<br>";
    echo "<button onclick=\"location.href='./close_session.php'\">Exit</button>";
}else{
    echo "Sorry but the user $email has entred to private section";
}
