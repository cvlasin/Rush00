<?php
	session_start();
	unset($_SESSION['login']);
	echo '<h2 align=center>You were logged out!</br>Redirecting...</h2>';
?>
<meta http-equiv="refresh" content="1; url=index.php">