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
        <a class="navbar-brand" href="adminpage.php">早餐店資料庫系統</a>
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
                <li class="nav-item mt-1 admin_btn">
                    <a id="admin1" class="nav-link" href="javascript:void(0)">店家資訊</a>
                </li>
                <li class="nav-item mt-1 admin_btn">
                    <a id="admin2" class="nav-link" href="javascript:void(0)">食物資訊</a>
                </li>
                <li class="nav-item mt-1 admin_btn">
                    <a id="admin3" class="nav-link" href="javascript:void(0)">供應商資訊</a>
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
                    <div class="file_border">
                        <h1>店家資訊</h1>
                        <table>
                            <thead>
                            <tr>
                                <th><span class="RWD_show">BSID</span><span class="RWD_noShow">BreakfastShopID</span></th>
                                <th><span class="RWD_show">SN</span><span class="RWD_noShow">ShopName</span></th>
                                <th><span class="RWD_show">BH</span><span class="RWD_noShow">BusinessHour</span></th>
                                <th>edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>BFS<span class="RWD_show"></span>-01</td>
                                <td>美而美基隆中正店</td>
                                <td>5:00am<span class="RWD_show"></span>~1:00pm</td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>BFS<span class="RWD_show"></span>-01</td>
                                <td>美而美基隆中正店</td>
                                <td>5:00am<span class="RWD_show"></span>~1:00pm</td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>BFS<span class="RWD_show"></span>-01</td>
                                <td>美而美基隆中正店</td>
                                <td>5:00am<span class="RWD_show"></span>~1:00pm</td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>BFS<span class="RWD_show"></span>-01</td>
                                <td>美而美基隆中正店</td>
                                <td>5:00am<span class="RWD_show"></span>~1:00pm</td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--            食物資訊    -->
                <div class="grey_background admin2" style="display: none">
                    <div class="file_border">
                        <h1>食物資訊</h1>
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
                            <tr>
                                <td>1</td>
                                <td>BFS-01</td>
                                <td>漢堡</td>
                                <td>50</td>
                                <td></td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>BFS-01</td>
                                <td>漢堡</td>
                                <td>50</td>
                                <td></td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>BFS-01</td>
                                <td>漢堡</td>
                                <td>50</td>
                                <td></td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>BFS-01</td>
                                <td>漢堡</td>
                                <td>50</td>
                                <td></td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--            供應商資訊-->
                <div class="grey_background admin3" style="display: none">
                    <div class="file_border">
                        <h1>供應商資訊</h1>
                        <table>
                            <thead>
                            <tr>
                                <th><span class="RWD_show">FID</span><span class="RWD_noShow">FoodID</span></th>
                                <th><span class="RWD_show">SN</span><span class="RWD_noShow">ShopName</span></th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>COO<span class="RWD_noShow">(country of origin)</span></th>
                                <th>edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>百桂食品</td>
                                <td>彰化縣溪湖鎮東溪里員鹿路1段336號</td>
                                <td>(04)882-5058</td>
                                <td>台灣</td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>百桂食品</td>
                                <td>彰化縣溪湖鎮東溪里員鹿路1段336號</td>
                                <td>(04)882-5058</td>
                                <td>台灣</td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>百桂食品</td>
                                <td>彰化縣溪湖鎮東溪里員鹿路1段336號</td>
                                <td>(04)882-5058</td>
                                <td>台灣</td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>百桂食品</td>
                                <td>彰化縣溪湖鎮東溪里員鹿路1段336號</td>
                                <td>(04)882-5058</td>
                                <td>台灣</td>
                                <td>
                                    <div class="request_button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--            教室被點擊後顯示的畫面    -->
                <div class="card circle card_show" style="display: none">
                    <div class="close_button glass">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class=" card_body container_sp text-dark row scroll">
                        <section class="col-lg-4 col-12 classInfo">
                            <div class="show_left_top m-3 mb-4 circle">
                                <div class="heading mb-3">
                                    <h1>教室資訊</h1>
                                </div>
                                <div class="rows">
                                    <div class="container-fluid">
                                        <div class="info">
                                            <h3>教室:</h3>
                                            <p class="right">B10</p>
                                        </div>
                                        <div class="info">
                                            <h3>座位:</h3>
                                            <p class="right">50</p>
                                        </div>
                                        <div class="info"><h3>器材:</h3></div>
                                        <div class="row">
                                            <p class="col-6 col-md-3 col-lg-4 col-xl-3">投影機*1</p>
                                            <p class="col-6 col-md-3 col-lg-4 col-xl-3">電腦*1</p>
                                            <p class="col-6 col-md-3 col-lg-4 col-xl-3">投影機*1</p>
                                            <p class="col-6 col-md-3 col-lg-4 col-xl-3">投影機*1</p>
                                            <p class="col-6 col-md-3 col-lg-4 col-xl-3">電腦*1</p>
                                            <p class="col-6 col-md-3 col-lg-4 col-xl-3">投影機*1</p>
                                            <p class="col-6 col-md-3 col-lg-4 col-xl-3">投影機*1</p>
                                            <p class="col-6 col-md-3 col-lg-4 col-xl-3">電腦*1</p>
                                            <p class="col-6 col-md-3 col-lg-4 col-xl-3">投影機*1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show_left_bottom m-3 pe-4 circle">
                                <div class="heading">
                                    <h1>歷史資訊</h1>
                                </div>
                                <div class="rows record">
                                    <table class="col-12">
                                        <thead>
                                        <tr>
                                            <th><span class="RWD_noShow">借用</span>日期</th>
                                            <th><span class="RWD_noShow">借用人</span>學號</th>
                                            <th>開始<span class="RWD_noShow">借用時間</span></th>
                                            <th>結束<span class="RWD_noShow">借用時間</span></th>
                                        </tr>
                                        </thead>
                                        <tbody class="">
                                        <tr class="">
                                            <td>2019/<br class="RWD_show">04/18</td>
                                            <td>00857<br class="RWD_show">004</td>
                                            <td>第一節</td>
                                            <td>第三節</td>
                                        </tr>
                                        <tr>
                                            <td>2019/<br class="RWD_show">04/18</td>
                                            <td>00857<br class="RWD_show">004</td>
                                            <td>第一節</td>
                                            <td>第三節</td>
                                        </tr>
                                        <tr>
                                            <td>2019/<br class="RWD_show">04/18</td>
                                            <td>00857<br class="RWD_show">004</td>
                                            <td>第一節</td>
                                            <td>第三節</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>

                        <section class="col-lg-8 col-12 weekList">
                            <div class="show_right circle">
                                <div class="heading">
                                    <h1>今周已預定時間表</h1>
                                </div>
                                <table>
                                    <thead>
                                    <tr>
                                        <th><span>節\星期</span></th>
                                        <th><span class="RWD_word">星期</span>一</th>
                                        <th><span class="RWD_word">星期</span>二</th>
                                        <th><span class="RWD_word">星期</span>三</th>
                                        <th><span class="RWD_word">星期</span>四</th>
                                        <th><span class="RWD_word">星期</span>五</th>
                                        <th><span class="RWD_word">星期</span>六</th>
                                        <th><span class="RWD_word">星期</span>日</th>
                                    </tr>
                                    </thead>
                                    <tbody class="">
                                    <tr align="center">
                                        <td>第0節<span class="RWD_noShow">06:20~08:10</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第一節<span class="RWD_noShow">08:20~09:10</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第二節<span class="RWD_noShow">09:20~10:10</span></td>
                                        <td> </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td> </td>
                                        <td> </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第三節<span class="RWD_noShow">10:20~11:10</span></td>
                                        <td> </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td> </td>
                                        <td> </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第四節<span class="RWD_noShow">11:15~12:05</span></td>
                                        <td> </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td> </td>
                                        <td> </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第五節<span class="RWD_noShow">12:10~13:00</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第六節<span class="RWD_noShow">13:10~14:00</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第七節<span class="RWD_noShow">14:10~15:00</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第八節<span class="RWD_noShow">15:10~16:00</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第九節<span class="RWD_noShow">16:05~16:55</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第十節<span class="RWD_noShow">17:30~18:20</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第十一節<span class="RWD_noShow">18:30~19:20</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第十二節<span class="RWD_noShow">19:25~20:15</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第十三節<span class="RWD_noShow">20:20~21:10</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr align="center">
                                        <td>第十四節<span class="RWD_noShow">21:15~22:05</span></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>

                    </div>
                </div>
                <!--            操作按鈕點擊後操作頁面-->
                <div class="card card_request"style="display: none">
                    <div class="card_title">
                        <h4>操作選單</h4>
                    </div>
                    <div class="card_body">
                        <button type="button" class="mb-2 btn btn-primary select_table_button">修改</button>
                        <button type="button" class="mb-2 btn btn-primary select_table_button" >刪除</button>
                        <button type="button" class="mb-2 btn btn-primary select_table_button">離開</button>
                    </div>
                </div>
                <div class="black_background" style="display: none"></div>
            </div>
            <!--<div class="request no_display">
                <div class="row m-2">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Action item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-success">Success item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Secondary item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-info">Info item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Warning item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">Danger item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Primary item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Dark item</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light">Light item</a>
                    </div>
                </div>
            </div>-->
            <div class="send">
                <div class="row m-2">

                </div>
            </div>
            <div class="track">
                <div class="row m-2">

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