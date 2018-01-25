<?php
ob_start();
session_start();
if($_SESSION["id"] == '') {
    header("location:../../index.php");
}
else{
    header("location:../../indexphp.php");
}
?>