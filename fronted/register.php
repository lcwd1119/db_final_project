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
        $query = "insert into admin values(?,?)";
        $stmt = $db->prepare($query);
        try{
            $stmt->execute(array($username,$password));
            echo '<script>alert("新增成功");</script>';
            echo '<script>window.location.href="home.php";</script>';
        }catch (Exception $e){
            echo "<script>alert('錯誤:此帳號已經有人使用過');</script>";
        }
    }
}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>會員註冊</title>

</head>
<body>
<h1>Register</h1>
<form name="registerForm" method="post" action="register.php">
    帳  號：
    <input type="text" name="username"><br/><br/>
    密  碼：
    <input type="password" name="password" id="password"><br/><br/>
    <input type="submit" value="註冊" name="submit">
    <button type="button" onclick="window.location.href='home.php'">
        返回
    </button>
</form>


</body>
</html>