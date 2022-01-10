<?php
//header("Content-type:text/html;charset=utf-8");
//include_once "adminsupplierpage.php";

include_once "db_conn.php";
$Table = $_POST['table'];
if ($Table == "foodsupplier") {
    $FoodID = $_POST['FoodID'];
    $query = ("delete from " . $Table . " where FoodID=?");
    $stmt = $db->prepare($query);
    $error = $stmt->execute(array($FoodID));//$error= $stmt->execute(array($no));
    echo "<script>alert('刪除成功')</script>";
    echo '<script>location.href="adminfoodsupplierpage.php"</script>';
} else if ($Table == "bfshop") {
    $BreakfastShopID = $_POST['BreakfastShopID'];
    $query = ("delete from " . $Table . " where BreakfastShopID=?");
    $stmt = $db->prepare($query);
    $error = $stmt->execute(array($BreakfastShopID));//$error= $stmt->execute(array($no));
    echo "<script>alert('刪除成功')</script>";
    echo '<script>location.href="adminbfshoppage.php"</script>';
} else if ($Table == "menu") {
    $FoodID = $_POST['FoodID'];
    $query = ("delete from " . $Table . " where FoodID=?");
    $stmt = $db->prepare($query);
    $error = $stmt->execute(array($FoodID));//$error= $stmt->execute(array($no));
    echo "<script>alert('刪除成功')</script>";
    echo '<script>location.href="adminmenupage.php"</script>';
}
print_r($_POST);
?>
                    