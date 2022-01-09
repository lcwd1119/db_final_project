<?php

include_once "db_conn.php";
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(empty($username) || empty($password)){
        echo "<script>alert('錯誤:資料未填完整');</script>";
    }
    else{
        $query = "UPDATE admin set account = ?,password = ? where account = ?";
        $stmt = $db->prepare($query);
        try{
            $stmt->execute(array($username,$password,$_SESSION['username']));
            echo '<script>alert("修改成功");</script>';
            $_SESSION['username'] = $username;
            echo '<script>window.location.href="login_home.php";</script>';
        }catch (Exception $e){
            echo "<script>alert('錯誤:此帳號已經有人使用過');</script>";
        }
    }
}

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>修改會員資料</title>

</head>
<body>
<h1>修改會員資料</h1>
<form name="registerForm" method="post" action="edit_account.php">
   <?php
   echo sprintf('帳  號：<input type="text" name="username" value="%s"/><br/><br/></td>', $_SESSION["username"]);
   ?>
    新密碼：
    <input type="password" name="password" id="password"><br/><br/>
    <input type="submit" value="更改" name="submit">
    <button type="button" onclick="window.location.href='login_home.php'">
        返回
    </button>
</form>


</body>
</html>