<link href="style.css" rel="stylesheet" type="text/css"/>
<?php
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$rocks = $_POST["r"];
	$shirts = $_POST["t"];
	$paintings = $_POST["p"];
	$ship = $_POST["ship"];
	$shipcost = 0;
	$shipword = "Seven days";
	$total = 0;
	
	if($ship == "b")
	{
		$shipcost = 5;
		$shipword = "Three days";
	}
	else if($ship == "c")
	{
		$shipcost = 50;
		$shipword = "Overnight";
	}
	
	$total = ($rocks * 2 + $shirts * 10 + $paintings * 20 + $shipcost);
	echo "Welcome user ".$user."! You're password is ".$pass."<br>";
	echo "Thanks for your purchase! Here's your receipt:<br><br><p>";
	echo "<table style=width:100%>";
	echo "<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Subtotal</td></tr>";
	echo "<tr><td>Rocks</td><td>".$rocks."</td><td>$2</td><td>$".($rocks * 2)."</td></tr>";
	echo "<tr><td>T-Shirts</td><td>".$shirts."</td><td>$10</td><td>$".($shirts * 10)."</td></tr>";
	echo "<tr><td>Paintings</td><td>".$paintings."</td><td>$20</td><td>$".($paintings * 20)."</td></tr>";
	echo "<tr><td>Shipping</td><td>".$shipword."</td><td>$".$shipcost."</td><td>$".$shipcost."</tr>";
	echo "<tr><td></td><td></td><td>Total Cost</td><td>$".$total."</td></tr>";
	echo "</table></p>";
?>
