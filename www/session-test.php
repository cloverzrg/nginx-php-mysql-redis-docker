<?php
session_start();
if (!isset($_SESSION['views'])){
    $_SESSION['views']=0;
}
$_SESSION['views']=$_SESSION['views'] + 1;
echo "views=". $_SESSION['views'];
?>