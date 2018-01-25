<?php
    session_start();
    ob_start();
	include("connectdb.php");
	$strSQL = "SELECT * FROM hahoa WHERE username = '".mysql_real_escape_string($_POST['username'])."' 
	and password = '".mysql_real_escape_string($_POST['password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
        echo "<script>
alert('Username and Password Incorrect!');
window.location.href='../../index.php';
</script>";
	}
	else
	{
            $_SESSION["firstname"]= $objResult["firstname"];
            $_SESSION["lastname"]= $objResult["lastname"];
			$_SESSION["id"] = $objResult["id"];
			session_write_close();
				header("location:../../indexphp.php");
    }
	mysql_close();
?>