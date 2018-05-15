<?php
session_start();
if(array_key_exists('id', $_GET)) {
	unset($_SESSION['cart'][$_GET['id']]);
}
header("Location: cart.php");