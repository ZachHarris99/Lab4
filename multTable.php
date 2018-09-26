<?php
	$x = 1;
	$y = 1;
	echo "<table style=width:100%>";
	echo "<tr><td> </td>";
	while ($y < 101) {
		echo "<td>".$y."</td>";
		$y++;
	}
	echo "</tr>";
	$y = 1;
	while ($y < 101) {
		echo "<tr>";
		echo "<td>".$y."</td>";
		while ($x < 101) {
			echo "<td>".($x * $y)."</td>";
			$x++;
		}
		$x = 1;
		echo "</tr>";
		$y++;
	}
	echo "</table>";
?>
