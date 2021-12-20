<?php
session_start();
if(isset($_SESSION['email']) || isset($_POST['email'])){
    $email= $_POST['email'];
    $_SESSION['email']=$email;
    $pass= $_POST['pass'];
    $_SESSION['pass']=$pass;
    $url="./validate.php";
    header('Location:'.$url);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="POST">
        <label>email<input type="text" name="email"></label><br>
        <label>password<input type="text" name="pass"></label><br>
        <button type="submit" >Submit</button>
    </form>
    <?php
       
    ?>
</body>
</html>