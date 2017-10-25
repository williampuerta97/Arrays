<?php 
	
	echo "<div>";

	$tabla = array(array(),array(),array(),array(),array(),array(),array(),array(),array(),array());


	echo "Array en forma de tabla de 10x10";
	
	echo "<table border=1>";
	for ($i=0; $i < sizeof($tabla); $i++) { 
		echo "<tr>";
		for ($j=0; $j < sizeof($tabla); $j++) { 
			if ($j%2 == 0) {
				$tabla[$i][$j] = 1;
				echo "<td>".$tabla[$i][$j]."</td>";
			}else{
				$tabla[$i][$j] = 0;
				echo "<td>".$tabla[$i][$j]."</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";

	echo "</div>";

 ?>