<?php 

	$array1 = array();
	$array2 = array();
	$n = 0;
	$error = false;

	for ($i=0; $i < 10; $i++) { 
		if (isset($_POST['dato'.$i])) {
			$array1[$i] = $_POST['dato'.$i];			
		}
	}

	for ($i=0; $i < 10; $i++) { 
			$array[$i] = $_POST['dato'.$i];
			
			if (empty($array[$i]) || !is_numeric($array[$i])) {
				$error = true;
			}
		}
		if ($error) {
			echo "<b>Error en los datos, pueden estar vacios o contiene carácteres no válidos</b>";
		}else if(!$error){
			echo "<table border=1>";
	  			$a = 1;
				for ($i=sizeof($array1)-1; $i >= 0; $i--) { 
						$array2[$n] = $array1[$i];
						echo "<tr>";
							echo "<td>Número ".$a."</td>";
							echo "<td>".$array2[$n]."</td>";
						echo "</tr>";
						$n++;
						$a++;
				}
	echo "</table>";
		
		}
 ?>