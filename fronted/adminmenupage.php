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
            <!--            食物資訊    -->
            <div class="grey_background admin2" style="display: ">
                <div class="file_border" style="max-width: 1000px;">
                    <div class="file_header">
                        <h1>食物資訊</h1>
                        <button type="button" class="mb-2 btn btn-primary add">
                            新增
                        </button>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th><span class="RWD_show">FID</span><span class="RWD_noShow">FoodID</span></th>
                            <th><span class="RWD_show">BID</span><span class="RWD_noShow">BreakfastShopID</span></th>
                            <th><span class="RWD_show">FN</span><span class="RWD_noShow">FoodName</span></th>
                            <th>Price</th>
                            <th>Remark</th>
                            <th>edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $user = 'root';//資料庫使用者名稱
                        $password = '';//資料庫的密碼
                        try{
                            $db = new PDO('mysql:host=localhost;dbname=db_final_project;charset=utf8',$user,$password);
                            //之後若要結束與資料庫的連線，則使用「$db = null;」
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
                        }
                        catch(PDOException $e){//若上述程式碼出現錯誤，便會執行以下動作
                            Print "ERROR!:". $e->getMessage();
                            die();
                        }

                        $query = ("select * from menu");//select * from employee where ID = ?
                        $stmt =  $db->prepare($query);
                        $error= $stmt->execute();//$error= $stmt->execute(array($no));
                        $result = $stmt->fetchAll();
                        $shop_list = 
                        '<tr>
                        <td>%d</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>
                            <div id="%d" class="request_button">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </td>
                        </tr>';
                        for($i=0; $i<count($result); $i++)
                        {
                            echo sprintf($shop_list,$result[$i]['FoodID'],$result[$i]['BreakfastShopID'],$result[$i]['FoodName'],$result[$i]['Price'],$result[$i]['Remark'],$result[$i]['FoodID']);

                        }
                        /*$t1_BSID='BFS<span class="RWD_show"></span>-01';
                        $t1_SN='美而美基隆中正店';
                        $t1_BH='5:00am<span class="RWD_show"></span>~1:00pm';*/
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--            新增頁面-->
            <div class="grey_background admin4 addpage" style="display: none">
                <div class="file_border" style="max-width: 800px;">
                    <form action="postget_request.php" method="post">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="table" placeholder="Enter email" name="table" value="menu" readonly>
                            <label for="table">Table</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="FoodID" placeholder="Enter email" name="FoodID">
                            <label for="FoodID">FoodID</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="BreakfastShopID" placeholder="Enter password" name="BreakfastShopID">
                            <label for="BreakfastShopID">BreakfastShopID</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="FoodName" placeholder="Enter password" name="FoodName">
                            <label for="FoodName">FoodName</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="Price" placeholder="Enter email" name="Price">
                            <label for="Price">Price</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="Remark" placeholder="Enter email" name="Remark">
                            <label for="Remark">Remark</label>
                        </div>
                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>
                </div>
            </div>
            <!--            修改頁面-->
            <div class="grey_background admin4 editpage" style="display: none">
                <div class="file_border" style="max-width: 800px;">
                    <form action="edit.php" method="post">
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="table" placeholder="Enter email" name="table" value="menu" readonly>
                            <label for="table">Table</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="FoodID" placeholder="Enter email" name="FoodID" readonly>
                            <label for="FoodID">FoodID</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="BreakfastShopID" placeholder="Enter password" name="BreakfastShopID">
                            <label for="BreakfastShopID">BreakfastShopID</label>
                        </div>
                        <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="FoodName" placeholder="Enter password" name="FoodName">
                            <label for="FoodName">FoodName</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="Price" placeholder="Enter email" name="Price">
                            <label for="Price">Price</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="Remark" placeholder="Enter email" name="Remark">
                            <label for="Remark">Remark</label>
                        </div>
                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>
                </div>
            </div>
            <!--            操作按鈕點擊後操作頁面-->
            <div class="card card_request"style="display: none">
                <div class="card_title">
                    <h4>操作選單</h4>
                </div>
                <div class="card_body">
                        <button type="button" class="mb-2 btn btn-primary select_table_button edit_btn_menu">修改</button>
                        <form action="delete.php" method="post">
                            <input type="hidden" id="table" name="table" value="menu" >
                            <input class="primarykey" id="FoodID" type="hidden" name="FoodID" >
                            <button type="submit" class="mb-2 btn btn-primary select_table_button delete_btn_menu">刪除</button>
                        </form>
                        <button type="button" class="mb-2 btn btn-primary select_table_button">離開</button>

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