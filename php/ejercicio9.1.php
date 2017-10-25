 <?php 

 		$array = array();
 		$error2 = 0;
 		$error = 0;
		
		for ($i=0; $i < 12; $i++) { 
			if (isset($_POST['dato'.$i])) {
				$array[$i] = $_POST['dato'.$i];
			}else{
				$error =true;
			}
		}
		if (isset($_POST['num'])) {
	 		$num = $_POST['num'];
	 		if (empty($num) || !is_numeric($num)) {
	 			$error =true;
	 		}
		}else{
			$error = true;
		}
	if ($error) {
		echo "<b>Error en los datos, pueden estar vacios o contiene carácteres no válidos</b>";
	}else if(!$error){
		for ($i=0; $i < sizeof($array); $i++) { 
			if ($array[$i] == $num) {
				echo "<div>El numero está en la posición:". ($i+1) ."</div>";
			}else{
				$error2++;
			}
		}
		if ($error2 == sizeof($array)) {
			echo "No se encontró el número";
		}
	}
?>