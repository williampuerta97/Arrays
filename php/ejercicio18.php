<?php 
		$error = false;

		if (isset($_POST['dato1']) & isset($_POST['dato2']) & isset($_POST['dato3'])) {
			$num1 = $_POST['dato1'];
			$num2 = $_POST['dato2'];
			$simbolo = $_POST['dato3'];
			if ((empty($num1) || empty($num2)) || (!is_numeric($num1) || !is_numeric($num2))) {
				$error = true;
			}
				if ($simbolo != "+" & $simbolo != "-" & $simbolo != "*" & $simbolo != "/") {
					 $error = true;
				}	
		}else{
			$error = true;
		}

		if ($error) {
			echo "<b>Error en los datos, pueden estar vacios o contiene carácteres no válidos</b>";
		}else if(!$error){
		$res=0;

		switch ($simbolo) {
			case '+':
				$res=$num1+$num2;
				echo $res;
				break;
			case '-':
				$res=$num1-$num2;
				echo $res;
				break;
			case '*':
				$res=$num1*$num2;
				echo $res;
				break;
			case '/':
				$res=$num1/$num2;
				echo $res;
				break;
			
			default:
				echo "Error";
				break;
		}
	}
 ?>
