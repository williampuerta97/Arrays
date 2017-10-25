<?php 

	
	$suma = 0;
	$error = false;

	for ($i=0; $i < 5; $i++) {
		if (isset($_POST['dato'.$i])) {
			$vector[$i] = $_POST['dato'.$i];
		}else{
			$error = true;
		}
		if (empty($vector[$i]) || !is_numeric($vector[$i])) {
				$error = true;
		}
	}
	if (isset($_POST['num'])) {
		$cant = $_POST['num'];
			if (empty($cant) || !is_numeric($cant)) {
				$error = true;
			}
			if ($cant > 5 || $cant < 0) {
				$error = true;
				echo "<div><b>El número a buscar debe estar entre 1 y 5</b></div>";
			}
	}else{
		$error = true;
	}
	

	if ($error) {
		echo "<b>Error en los datos, pueden estar vacios o contiene carácteres no válidos</b>";
	}else if(!$error){
		echo "<b>Contenido del arreglo</b><br>";

		echo "<table border=1>";
		echo "<tr>";
		for ($i=0; $i < 5; $i++) {
				$vector[$i] = $_POST['dato'.$i];
			echo "<td>". $vector[$i] . "</td>";
		}
		echo "</tr>";
		echo "</table>";

		for ($i=0; $i < $cant; $i++) { 
				$suma += $vector[$i];
			}
		
		echo "<b>Suma:  </b>$suma";
		echo "<br><b>Número ingresado por usuario: $cant</b>";
}
 ?>