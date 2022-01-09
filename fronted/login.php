<?php
include_once "db_conn.php";
// Initialize the session
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select password from admin where account = ? and password = ?";
    $stmt = $db->prepare($query);
    $stmt -> execute(array($username,$password));
    $result = $stmt -> fetchAll();

    if(count($result)==1){
        //echo "<script>alert('登入成功')</script>";
        $_SESSION["hasSignedIn"] = true;
        $_SESSION["username"] = $username;
        echo '<script>location.href="login_home.php"</script>';
        exit;
    }
    else{
        echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>登入介面</title>
</head>
<body>
<h1>Log In</h1>
<form method="post" action="login.php">
    帳號：
    <input type="text" name="username"><br/><br/>
    密碼：
    <input type="password" name="password"><br><br>
    <div>
        <input type="submit" value="登入" name="submit">
        <button type="button" onclick="window.location.href='home.php'">
            返回
        </button>
    </div>
    <a href="register.php">還沒有帳號？現在就註冊！</a>
</form>
</body>
</html>

