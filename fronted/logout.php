<?php
session_start();
$_SESSION = array();
session_destroy();
echo "<script>alert('已登出')</script>";
echo '<script>location.href="home.php"</script>';
?>
