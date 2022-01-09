<?php
session_start();
include_once "db_conn.php";
if(isset($_SESSION["hasSignedIn"]) && $_SESSION["hasSignedIn"]==true){
    //echo 'user_id:'.$_SESSION["user_id"].'</br>';
    //echo 'username:'.$_SESSION["username"].'</br>';
}else{
    echo '<script>alert("請先登入!");</script>';
    echo '<script>window.location.href="home.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>早餐店資料庫系統</title>
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
        <a class="navbar-brand" href="login_home.php">早餐店資料庫系統</a>
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
                        <h1>店家資訊</h1>
                        <button type="button" class="mb-2 btn btn-primary add">
                            新增
                        </button>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th><span class="RWD_show">BSID</span><span class="RWD_noShow">BreakfastShopID</span></th>
                            <th><span class="RWD_show">SN</span><span class="RWD_noShow">ShopName</span></th>
                            <th><span class="RWD_show">BH</span><span class="RWD_noShow">BusinessHour</span></th>
                            <th><span class="RWD_show">ML</span><span class="RWD_noShow">MenuList</span></th>
                            <th>edit</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        include_once "db_conn.php";

                        $query = ("select * from bfshop");//select * from employee where ID = ?
                        $stmt = $db->prepare($query);
                        $error = $stmt->execute();//$error= $stmt->execute(array($no));
                        $result = $stmt->fetchAll();
                        $shop_list =
                            '<tr>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%s</td>
                                <td>
                                    <form action="foodlist.php" method="post">
                                        <input type="hidden" name="BreakfastShopID" value="%s"></input>
                                        <button type="submit" class="btn btn-secondary">菜單</button>
                                    </form>
                                </td>
                                <td>
                                    <div id="%s" class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>';
                        for ($i = 0; $i < count($result); $i++) {
                            echo sprintf($shop_list, $result[$i]['BreakfastShopID'], $result[$i]['ShopName'], $result[$i]['BusinessHour'], $result[$i]['BreakfastShopID'], $result[$i]['BreakfastShopID']);

                        }
                        /*$t1_BSID='BFS<span class="RWD_show"></span>-01';
                        $t1_SN='美而美基隆中正店';
                        $t1_BH='5:00am<span class="RWD_show"></span>~1:00pm';*/
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--            新增頁面    -->
            <div class="grey_background admin4 addpage" style="display: none">
                <div class="file_border" style="max-width: 800px;">
                    <form action="postget_request.php" method="post">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="table" placeholder="Enter email" name="table"
                                   value="bfshop" readonly>
                            <label for="table">Table</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="BreakfastShopID" placeholder="Enter email"
                                   name="BreakfastShopID">
                            <label for="BreakfastShopID">BreakfastShopID</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="ShopName" placeholder="Enter password"
                                   name="ShopName">
                            <label for="ShopName">ShopName</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="BusinessHour" placeholder="Enter password"
                                   name="BusinessHour">
                            <label for="BusinessHour">BusinessHour</label>
                        </div>
                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>
                </div>
            </div>
            <!--            修改頁面    -->
            <div class="grey_background admin4 editpage" style="display: none">
                <div class="file_border" style="max-width: 800px;">
                    <form action="edit.php" method="post">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="table" placeholder="Enter email" name="table"
                                   value="bfshop" readonly>
                            <label for="table">Table</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="BreakfastShopID" placeholder="Enter email"
                                   name="BreakfastShopID" readonly>
                            <label for="BreakfastShopID">BreakfastShopID</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="ShopName" placeholder="Enter password"
                                   name="ShopName">
                            <label for="ShopName">ShopName</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="BusinessHour" placeholder="Enter password"
                                   name="BusinessHour">
                            <label for="BusinessHour">BusinessHour</label>
                        </div>
                        <button type="submit" class="btn btn-primary">修改</button>
                    </form>
                </div>
            </div>
            <!--            操作按鈕點擊後操作頁面-->
            <div class="card card_request" style="display: none">
                <div class="card_title">
                    <h4>操作選單</h4>
                </div>
                <div class="card_body">
                    <button type="button" class="mb-2 btn btn-primary select_table_button edit_btn_shop">修改</button>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="table" value="bfshop">
                        <input class="primarykey" type="hidden" name="BreakfastShopID">
                        <button type="submit" class="mb-2 btn btn-primary select_table_button delete_btn_shop">刪除
                        </button>
                    </form>
                    <button type="button" class="mb-2 btn btn-primary select_table_button ">離開</button>
                </div>
            </div>
            <div class="black_background" style="display: none"></div>
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