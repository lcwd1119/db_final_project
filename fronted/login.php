<?php
include_once "db_conn.php";
// Initialize the session
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select password from admin where account = ? and password = ?";
    $stmt = $db->prepare($query);
    $stmt->execute(array($username, $password));
    $result = $stmt->fetchAll();

    if (count($result) == 1) {
        //echo "<script>alert('登入成功')</script>";
        $_SESSION["hasSignedIn"] = true;
        $_SESSION["username"] = $username;
        echo '<script>location.href="login_home.php"</script>';
        exit;
    } else {
        echo "<script>alert('帳號或密碼錯誤')</script>";
        echo '<script>location.href="login.php"</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>登入介面</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="pagestyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #menu {
            position: fixed;
            right: 0;
            top: 50%;
            width: 8em;
            margin-top: -2.5em;
        }
    </style>
</head>
<body class="body_spec">
<!--Header-->
<nav class="navbar navbar-expand-sm navbar-white bg-white fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">早餐店資料庫系統</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <!--            <span class="navbar-toggler-icon"></span>-->
            <div class="toggle_button">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto text-center justify-content-end">
                <li class="nav-item mt-1">
                    <a id="admin1" class="nav-link" href="adminbfshoppage.php">店家資訊</a>
                </li>
                <li class="nav-item mt-1">
                    <a id="admin2" class="nav-link" href="adminmenupage.php">食物資訊</a>
                </li>
                <li class="nav-item mt-1">
                    <a id="admin3" class="nav-link" href="adminfoodsupplierpage.php">供應商資訊</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--style="background-color: #bfd1ec"  這個原放置於sidebar李-->
<div class="container-fluid ">
    <div class="row" style="height: max-content">
        <div class="">
            <!--            店家資訊-->
            <div class="grey_background admin1" style="display: ">
                <div class="file_border" style="max-width: 1000px;">
                    <div class="file_header">
                        <h1>Log In</h1>
                    </div>
                    <div>
                        <form action="login.php" method="post">
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" class="form-control" id="BreakfastShopID" placeholder="Enter email"
                                       name="username">
                                <label for="BreakfastShopID">帳號</label>
                            </div>
                            <div class="form-floating mt-3 mb-3">
                                <input type="password" class="form-control" id="ShopName" placeholder="Enter password"
                                       name="password">
                                <label for="ShopName">密碼</label>
                            </div>
                            <div>
                                <input type="submit" value="登入" name="submit" class="btn btn-primary">
                                <button type="button" onclick="window.location.href='home.php'" class="btn btn-primary">
                                    返回
                                </button>
                            </div>
                            <a href="register.php">還沒有帳號？現在就註冊！</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--回到最上層按鈕-->
<a href="#" class="">
    <div id="scroll-top" class="up_button glass">
        <span></span>
        <span></span>
        <span></span>
    </div>
</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<!---->
<!--<html>-->
<!--<head>-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
<!--    <title>登入介面</title>-->
<!--</head>-->
<!--<body>-->
<!--<h1>Log In</h1>-->
<!--<form method="post" action="login.php">-->
<!--    帳號：-->
<!--    <input type="text" name="username"><br/><br/>-->
<!--    密碼：-->
<!--    <input type="password" name="password"><br><br>-->
<!--    <div>-->
<!--        <input type="submit" value="登入" name="submit">-->
<!--        <button type="button" onclick="window.location.href='home.php'">-->
<!--            返回-->
<!--        </button>-->
<!--    </div>-->
<!--    <a href="register.php">還沒有帳號？現在就註冊！</a>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

