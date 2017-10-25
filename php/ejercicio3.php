<?php
		$array = array();
		$max = 0;
		$position = 0;
		$error = false;
		$igual = false;

		for ($i=0; $i < 5; $i++) {
			if (isset($_POST['dato'.$i])) {
				$array[$i] = $_POST['dato'.$i];
			}

			if (empty($array[$i]) || !is_numeric($array[$i])) {
				$error = true;
			}
			for ($j=0; $j < sizeof($array); $j++) { 
				if ($i!=$j) {
					if ($array[$i]==$array[$j]) {
						$igual = true;
					}
				}
			}
		}

		if ($error) {
			echo "<b>Error en los datos, pueden estar vacios o contiene carácteres no válidos</b>";
		}else if ($igual) {
			echo "Los números no pueden ser iguales";
		}else if(!$error&&!$igual){
			for ($i=0; $i < sizeof($array); $i++) {
				if ($array[$i] > $max) {
					$max = $array[$i];
					$position = $i;
				}
			}
		echo "<b>El número mayor es: $max en la posición: $position</b>";
		echo $error;


	}

?>
