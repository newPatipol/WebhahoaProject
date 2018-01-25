<?php
	session_start();
    ob_start();
	session_destroy();
    echo "<script>
confirm('You want to logout?');
window.location.href='../../index.php';
</script>";
?>
