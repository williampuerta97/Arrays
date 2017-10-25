<?php 
	
		$array = array();
		$error = false;
		
		for ($i=0; $i < 12; $i++) { 
			if (isset($_POST['dato'.$i])) {
				$array[$i] = $_POST['dato'.$i];
			}
		}
		// echo "<pre>";
		// print_r($array);
		// echo "</pre>";

		for ($i=0; $i < 12; $i++) { 
			$array[$i] = $_POST['dato'.$i];
			
			if (empty($array[$i]) || !is_numeric($array[$i])) {
				$error = true;
			}
		}

		if ($error) {
			echo "<b>Error en los datos, pueden estar vacios o contiene carácteres no válidos asd</b>";
		}else if(!$error){?>
		<label for="">Ingrese el número a buscar en el arreglo </label>
	 	<input type="number" id="num">
	 	<input type="submit" value="Buscar" id="submit">
<?php 
		for ($i=0; $i < 12; $i++) { 
			echo "<input type='hidden' id='num".$i."' value='".$array[$i]."'>";
		}
?>		<script type="text/javascript">
		$("#submit").click(function(){

			var num0 = $("#num0").val(); var num1 = $("#num1").val();
			var num2 = $("#num2").val(); var num3 = $("#num3").val();
			var num4 = $("#num4").val(); var num5 = $("#num5").val();
			var num6 = $("#num6").val(); var num7 = $("#num7").val();
			var num8 = $("#num8").val(); var num9 = $("#num9").val();
			var num10 = $("#num10").val(); var num11 = $("#num11").val();

			var numb = $("#num").val();
			
			var datos = {dato0:num0,
						 dato1:num1,
						 dato2:num2,
						 dato3:num3,
						 dato4:num4,
						 dato5:num5,
						 dato6:num6,
						 dato7:num7,
						 dato8:num8,
						 dato9:num9,
						 dato10:num10,
						 dato11:num11,
						 num:numb};
		
				$.ajax({
				url: 'php/ejercicio9.1.php',
				method: 'post',
				data : datos,
				success:function(datos){
					$("#respuesta").css('background-color','#e0e0d1');
					$("#respuesta").html(datos);
				},
				error:function(){
					$("#respuesta").css('background-color','#ff4d4d');
					$("#respuesta").html(datos);
				}
			})
	})
</script>
<?php } ?>

	 	

