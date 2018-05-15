<h3>ADD, REMOVE, CHANGE PRODUCTS</h3>
<form method="post">
	Product Title: <input type="text" name="product" value=""><br>
	Product Price: <input type="text" name="price" value=""><br>
	Product Image link: <input type="text" name="link" value=""><br>
	<input type="submit" name="submit" value="Add product">
</form>
<br>
<?php

	require_once('mysql_connect2.php');
		$conn = database_connect2();
		$query = "SELECT id, name, price FROM product";
		$sql = mysqli_query($conn, $query);
		echo "<ul>";
		while($row = mysqli_fetch_array($sql)){
		?>
			<li><?php echo $row['id'].": ".$row['name']."   ".$row['price'];?></li>
		<?php } 
		echo "</ul>";
		mysqli_close($conn);

?>
<br>
<form method="post">
	Select product id: <input type="text" name="deleteuser" value=""><br>
	What to modify(options: delete, changeprice or changename): <input type="text" name="change" value=""><br>
	What to replace with: <input type="text" name="replace" value=""><br>
	<input type="submit" name="delete2" value="Submit">
</form>
<br>

<h3>ADD, REMOVE, CHANGE USER</h3>

<form method="post">
	Username: <input type="text" name="useradd" value=""><br>
	Password: <input type="text" name="passwd" value=""><br>
	<input type="submit" name="submit" value="Add user">
</form>

<?php
		require_once('mysql_connect2.php');
		require_once('create_user.php');
		if (isset($_POST['useradd'], $_POST['passwd'])) {
			create_user($_POST['useradd'],$_POST['passwd']);
		}
?>

<?php
		require_once('mysql_connect2.php');
		$conn = database_connect2();
		$query = "SELECT name FROM users";
		$sql = mysqli_query($conn, $query);
		echo "<ol>";
		while($row = mysqli_fetch_array($sql)){
		?>
			<li><?php echo $row['name'];?></li>
		<?php } 
		echo "</ol>";
		mysqli_close($conn);
?>

<form method="post">
	Select user: <input type="text" name="deleteuser" value=""><br>
	What to modify(options: delete, changepass or changename): <input type="text" name="change" value=""><br>
	What to replace with: <input type="text" name="replace" value=""><br>
	<input type="submit" name="delete" value="Submit">
</form>
<?php

	if(!isset($_POST['deleteuser'], $_POST['change']))
		echo "enter a product to change or delete";
	else
	{	
		require_once('mysql_connect2.php');
		$conn = database_connect2();
		$usertodel = $_POST['deleteuser'];
		if ($_POST['change'] == "delete")
		{
			$query = "DELETE FROM users WHERE name='$usertodel'";
			$sql = mysqli_query($conn, $query);
			var_dump($sql);
		}
		else if ($_POST['change'] === "changeprice")
		{
			$newpass = $_POST['replace'];
			$query = "UPDATE users SET price='$newpass' WHERE name='$usertodel'";
			$sql = mysqli_query($conn, $query);
		}
		else if ($_POST['change'] === "changename")
		{
			$newuser = $_POST['replace'];
			$query = "UPDATE users SET name='$newuser' WHERE name='$usertodel'";
			$sql = mysqli_query($conn, $query);
		}
		mysqli_close($conn);
		echo '<meta http-equiv="refresh" content="1;add_content.php">';
	}

?>

<h3>ADD, REMOVE, CHANGE CATEGORY</h3>

<?php

	require_once('mysql_connect2.php');
	$conn = database_connect2();
	$query = "SELECT name FROM category";
	$sql = mysqli_query($conn, $query);
	echo "<ol>";
	while($row = mysqli_fetch_array($sql)){
	?>
		<li><?php echo $row['name'];?></li>
	<?php } 
	echo "</ol>";
	mysqli_close($conn);

?>
<br>



<form method="post">
	Category Title: <input type="text" name="catname" value=""><br>
	<input type="submit" name="submit2" value="Add category">
</form>

<?php
		if ((!isset($_POST['catname'], $_POST['submit2'])))
			echo "Please fill all the fields\n";
		else
		{
			require_once('mysql_connect2.php');
			$conn = database_connect2();
			$value1 = "";
			if (isset($_POST['catname']))
				$value1 = $_POST['catname'];
			$addcontent = "INSERT INTO category (name) VALUES ('".$value1."')";
			if (mysqli_query($conn, $addcontent))
				echo "Category added!";
			else
				echo "Error while adding the category";
			mysqli_close($conn);
		}
?>

<form method="post">
	Select category: <input type="text" name="deletecat" value=""><br>
	What to modify(options: delete, changename): <input type="text" name="changecat" value=""><br>
	What to replace with: <input type="text" name="replace" value=""><br>
	<input type="submit" name="delete" value="Submit">
</form>

<?php

	if(!isset($_POST['deletecat'], $_POST['changecat']))
		echo "enter a product to change or delete";
	else
	{	
		require_once('mysql_connect2.php');
		$conn = database_connect2();
		$usertodel = $_POST['deletecat'];
		if ($_POST['changecat'] == "delete")
		{
			$query = "DELETE FROM category WHERE name='$usertodel'";
			$sql = mysqli_query($conn, $query);
		}
		else if ($_POST['changecat'] === "changename")
		{
			$newuser = $_POST['replace'];
			$query = "UPDATE category SET name='$newuser' WHERE name='$usertodel'";
			$sql = mysqli_query($conn, $query);
		}
		mysqli_close($conn);
		echo '<meta http-equiv="refresh" content="1;add_content.php">';
	}

?>

<br>
<h4><a href="index.php">Return to main page</a></h4>