	<div class="header">
		<div class="logo">
			<a href="index.php"><img class="logoimg" src="http://www.behindtherabbit.com/site/wp-content/uploads/beta.png"></a>
		</div>


		<div class="login">	

			<?php
				require_once('verify_login.php');
				$verif = true;
				if ((isset($_POST['username'], $_POST['password'], $_POST['submit'])))
				{
					if ($_POST['username'] == "admin" && $_POST['password'] == "admin")
					{
						$_SESSION['login']['username'] = "admin";
						$_SESSION['login']['password'] = "admin";
						
					}
					else{
						$_SESSION['login']['username'] = $_POST['username'];
						$_SESSION['login']['password'] = $_POST['password'];
						if (verify_login() == false)
						{
							$verif = false;
							echo 'Incorrect user/password';
						}
					}
				}
				if (isset($_SESSION['login']['username']) && $verif == true) {
					if ($_SESSION['login']['username'] == "admin")
						echo '<input type="button" name="adminchange" value="Admin zone" onclick="window.location=\'add_content.php\'">';
					echo '<input type="button" name="logout" onclick="window.location=\'logout.php\'" value="Log out"><br>'.$_SESSION['login']['username'];
					
				}
				else {
					echo '<form method="post">
						<user style = "font-size:20"><strong>Username:</strong> </user>
						<input type="text" name="username" value="">
						<pass font size = "20"><strong>Password:</strong> </pass>
						<input type="password" name="password" value="">
						<input type="submit" name="submit" value="Log in">
						<input type="button" name="register" value="Register" onclick="window.location=\'register.php\';"></br>';
					echo "You are not logged in";
				}
			?>
			</form>
		</div>

		<div class="menu">
			<div class="links">
				<a href="index.php" class="link">Home</a>
				<?php
					require_once('read_categories.php');
					$list_categories = read_categories();
					while($row = mysqli_fetch_array($list_categories)){
					?>
					<?php echo '<a class="link" href="'; echo $row['name'].".php"; echo '">';echo $row['name']; echo '</a>'?>
					<?php } ?>
			</div>
			<a href="cart.php" style="position: absolute; right: 20px; top: 5px;"><img class="cosul" src="resurse/cart.png"></a>
		</div>
	</div>
