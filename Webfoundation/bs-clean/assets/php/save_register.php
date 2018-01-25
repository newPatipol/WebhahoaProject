<?php
   include("connectdb.php");
    if(trim($_POST["firstname"]) == "")
	{
        echo "<script>
alert('Please input Firstname!');
window.location.href='../../index.php';
</script>";
		exit();	
	}	

    if(trim($_POST["lastname"]) == "")
	{
        echo "<script>
alert('Please input Lastname!');
window.location.href='../../index.php';
</script>";
		exit();	
	}	

    if(trim($_POST["email"]) == "")
	{
        echo "<script>
alert('Please input Email!');
window.location.href='../../index.php';
</script>";
		exit();	
	}

	if(trim($_POST["username"]) == "")
	{
        echo "<script>
alert('Please input Username!');
window.location.href='../../index.php';
</script>";
		exit();	
	}
	
	if(trim($_POST["password"]) == "")
	{
        echo "<script>
alert('Please input Password!');
window.location.href='../../index.php';
</script>";
		exit();	
	}	
		
	if($_POST["password"] != $_POST["password-repeat"])
	{
        echo "<script>
alert('Password not Match!');
window.location.href='../../index.php';
</script>";
		exit();
	}
	
	$strSQL = "SELECT * FROM hahoa WHERE username = '".trim($_POST['username'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
echo "<script>
alert('Username already exists!');
window.location.href='../../index.php';
</script>";
		exit();
	}
	else
	{	
		
		$strSQL = "INSERT INTO hahoa (firstname,lastname,email,username,password) VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."',
    '".$_POST["email"]."','".$_POST["username"]."','".$_POST["password"]."')";
		$objQuery = mysql_query($strSQL);
        echo "<script>
alert('Your Welcome!!you can login right now.');
window.location.href='../../index.php';
</script>";
    }
	mysql_close();
?>