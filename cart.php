<?php

session_start();

$total = 0;
$counter = 0;
if (isset($_SESSION['cart']) && isset($_SESSION['login']) && count($_SESSION['cart'])){
	echo '<table style="border: 1px solid #ddd;">';
	echo '<tr>';
	echo '<th></th>';
	echo '<th>Produs</th>';
	echo '<th>Pret</th>';
	echo '<th>Cantitate</th>';
	echo '</tr>';
	foreach ($_SESSION['cart'] as $key => $value) {
		echo '<tr>';
		echo '<td>'.++$counter,'</td>';
		echo '<td>'.$value['name'].'</td>';
		echo '<td>'.$value['price'].'</td>';
		echo "<td><p align=\"right\">".$value['cantitate']."</p></td>";
		echo "<td><a href=\"deleteitem.php?id=".$key."\">Delete item</td>";
		$total = $total + ($value['price'] * $value['cantitate']);
		echo '</tr>';
	}
	echo '</table>';

	echo "<h2>"."Pretul total este: ".$total." XBT</h2>";

	echo '<a href="finalizare.php">Finalizare comanda</a><br>';
}
else
	echo "You cart is empty";


?>
</br><a href="index.php">Return to main page</a>
