
                    <?php
                        //header("Content-type:text/html;charset=utf-8");
                        //include_once "adminsupplierpage.php";
                        
                        include_once "db_conn.php"
                        $Table = $_POST['table'];
                        if($Table == "foodsupplier"){
                            $FoodID = $_POST['FoodID'];
                            $query = ("delete from ".$Table." where FoodID=?");
                            $stmt =  $db->prepare($query);
                            $error= $stmt->execute(array($FoodID));//$error= $stmt->execute(array($no));
                            header("Location:adminfoodsupplierpage.php");
                        }
                        else if($Table == "bfshop"){
                                $BreakfastShopID = $_POST['BreakfastShopID'];
                                $query = ("delete from ".$Table." where BreakfastShopID=?");
                                $stmt =  $db->prepare($query);
                                $error= $stmt->execute(array($BreakfastShopID));//$error= $stmt->execute(array($no));
                                header("Location:adminbfshoppage.php");
                        }
                        else if($Table == "menu"){
                                $FoodID = $_POST['FoodID'];
                                $query = ("delete from ".$Table." where FoodID=?");
                                $stmt =  $db->prepare($query);
                                $error= $stmt->execute(array($FoodID));//$error= $stmt->execute(array($no));
                                header("Location:adminmenupage.php");
                        }
                        print_r($_POST);
                    ?>
                    