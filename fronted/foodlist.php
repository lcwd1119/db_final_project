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
        <a class="navbar-brand" href="adminbfshoppage.php">早餐店資料庫系統</a>
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
                <div class="grey_background admin2" style="display: ">
                    <div class="file_border" style="max-width: 1000px;">
                        <div class="file_header">
                            <?php
                            include_once "db_conn.php";
                            $BreakfastShopID = $_POST['BreakfastShopID'];
                            $query = ("select ShopName,count(FoodID) as tm from(select * from bfshop natural join menu where BreakfastShopID=?) as flist group by BreakfastShopID");//select * from employee where ID = ?
                            //$query = ("select BreakfastShopID,Count(FoodID) as total from(select * from bfshop natural join menu where BreakfastShopID=?) group by BreakfastShopID");//select * from employee where ID = ?
                            $stmt =  $db->prepare($query);
                            $error= $stmt->execute(array($BreakfastShopID));//$error= $stmt->execute(array($no));
                            $result = $stmt->fetchAll();
                            $shop_list = 
                            '<h1 class="mb-5 mt-5">%s共有%d種品項</h1>';
                            for($i=0; $i<count($result); $i++)
                            {
                                echo sprintf($shop_list,$result[$i]['ShopName'],$result[$i]['tm']);

                            }
                            /*$t1_BSID='BFS<span class="RWD_show"></span>-01';
                            $t1_SN='美而美基隆中正店';
                            $t1_BH='5:00am<span class="RWD_show"></span>~1:00pm';*/
                            ?>
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <th><span class="RWD_show">SN</span><span class="RWD_noShow">ShopName</span></th>
                                <th><span class="RWD_show">FN</span><span class="RWD_noShow">FoodName</span></th>
                                <th>Price</th>
                                <th>Remark</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                            include_once "db_conn.php";
                            $BreakfastShopID = $_POST['BreakfastShopID'];
                            $query = ("select * from bfshop natural join menu where BreakfastShopID=?");//select * from employee where ID = ?
                            $stmt =  $db->prepare($query);
                            $error= $stmt->execute(array($BreakfastShopID));//$error= $stmt->execute(array($no));
                            $result = $stmt->fetchAll();
                            $shop_list = 
                            '<tr>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%s</td>
                                <td>%s
                                </td>
                            </tr>';
                            for($i=0; $i<count($result); $i++)
                            {
                                echo sprintf($shop_list,$result[$i]['ShopName'],$result[$i]['FoodName'],$result[$i]['Price'],$result[$i]['Remark']);

                            }
                            /*$t1_BSID='BFS<span class="RWD_show"></span>-01';
                            $t1_SN='美而美基隆中正店';
                            $t1_BH='5:00am<span class="RWD_show"></span>~1:00pm';*/
                            ?>
                            </tbody>
                        </table>
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