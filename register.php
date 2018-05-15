
<?php
	require_once('create_user.php');
	if (!isset($_POST['username'], $_POST['password'], $_POST['submit'])) {
		echo "Please enter an username and a password\n";
		echo '<form method="post">
	Username: <input type="text" name="username" value=""><br>
	Password: <input type="password" name="password" value=""><br>
	<input type="submit" name="submit" value="Create user">
	</form>';
		echo '<br><a href="index.php">Return to main page</a>';
	}
	else
	{
		require_once('mysql_connect2.php');
		$conn = database_connect2();
		$sql = "SELECT name from users WHERE name='".$_POST['username']."'";
		$list_names = mysqli_query($conn, $sql);
		if (!(mysqli_num_rows($list_names) >= 1))
		{
			create_user($_POST['username'], $_POST['password']);
			echo '<meta http-equiv="refresh" content="2;index.php">';
			echo '<br><a href="index.php"><h3 align="center">Return to main page</h3></a>';
		}
		else
		{
			echo '<h2 align="center">Userul exista deja in baza de date.</h2>';
			echo '<meta http-equiv="refresh" content="1;register.php">';
		}
	}
?>