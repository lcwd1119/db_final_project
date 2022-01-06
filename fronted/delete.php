
                    <?php
                        //header("Content-type:text/html;charset=utf-8");
                        //include_once "adminsupplierpage.php";
                        
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
                        
                    ?>
                    