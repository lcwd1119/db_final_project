<?php
//header("Content-type:text/html;charset=utf-8");
//include_once "adminsupplierpage.php";

//
include_once "db_conn.php";
$Table = $_POST['table'];
if ($Table == "foodsupplier") {
    $FoodID = $_POST['FoodID'];
    $SupplierName = $_POST['SupplierName'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];
    $COO = $_POST['COO'];
    if (empty($FoodID) || empty($SupplierName)) {
        echo "<script>alert('錯誤：ID及供應商名稱不可為空');history.back()</script>";
    } else {
        try {
            $query = ("update ".$Table." set SupplierName=?,Address=?,Phone=?,COO=? where FoodID=?");
            $stmt = $db->prepare($query);
            $error= $stmt->execute(array($SupplierName,$Address,$Phone,$COO,$FoodID));//$error= $stmt->execute(array($no));
            echo "<script>alert('修改成功');</script>";
            echo "<script>window.location.href = 'adminfoodsupplierpage.php'</script>";
        } catch (PDOException $e) {
            echo sprintf('<script>alert("輸入錯誤:\n%s")</script>',$e->getMessage());
            echo "<script>window.location.href = 'adminfoodsupplierpage.php'</script>";
        }
    }
} else if ($Table == "bfshop") {
    $BreakfastShopID = $_POST['BreakfastShopID'];
    $ShopName = $_POST['ShopName'];
    $BusinessHour = $_POST['BusinessHour'];
    if (empty($BreakfastShopID) || empty($ShopName)) {
        echo "<script>alert('錯誤：ID及店名不可為空');history.back()</script>";
    } else {
        try {
            $query = ("update ".$Table." set ShopName=?,BusinessHour=? where BreakfastShopID=?");
            $stmt = $db->prepare($query);
            $error= $stmt->execute(array($ShopName,$BusinessHour,$BreakfastShopID));//$error= $stmt->execute(array($no));
            echo "<script>alert('修改成功')</script>";
            echo "<script>window.location.href = 'adminbfshoppage.php'</script>";
        } catch (PDOException $e) {
            echo sprintf('<script>alert("輸入錯誤:\n%s")</script>',$e->getMessage());
            echo "<script>history.back()</script>";
        }
    }
    //header("Location:adminbfshoppage.php");
} else if ($Table == "menu") {
    $FoodID = $_POST['FoodID'];
    $BreakfastShopID = $_POST['BreakfastShopID'];
    $FoodName = $_POST['FoodName'];
    $Price = $_POST['Price'];
    $Remark = $_POST['Remark'];
    if (empty($BreakfastShopID) || empty($FoodName)) {
        echo "<script>alert('錯誤：食物名稱及早餐店ID不可為空')</script>";
        echo "<script>window.location.href = 'adminmenupage.php'</script>";
    } else {
        try{
            include_once "db_conn.php";
            $query = ("update " . $Table . " set BreakfastShopID=?,FoodName=?,Price=?,Remark=? where FoodID=?");
            $stmt = $db->prepare($query);
            $error= $stmt->execute(array($BreakfastShopID,$FoodName,$Price,$Remark,$FoodID));//$error= $stmt->execute(array($no));
            echo "<script>alert('修改成功')</script>";
            echo "<script>window.location.href = 'adminmenupage.php'</script>";
        }
        catch (PDOException $e){
            echo sprintf('<script>alert("輸入錯誤:\n%s")</script>',$e->getMessage());
            echo "<script>window.location.href = 'adminmenupage.php'</script>";
        }
    }
}

?>
                    