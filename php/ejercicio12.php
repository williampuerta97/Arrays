<?php 

	$vector = array();
	$error = false;


	for ($i=0; $i < 5; $i++) {
		if (isset($_POST['dato'.$i])) {
			$vector[$i] = $_POST['dato'.$i];
		}
		if (empty($vector[$i]) || !is_numeric($vector[$i])) {
				$error = true;
		}
	}
	if ($error) {
			echo "<b>Error en los datos, pueden estar vacios o contiene carácteres no válidos</b>";
		}else if(!$error){?>
 		<label for="">Cuantos número desea sumar? de 1 a 5</label>
 		<input type="number" id="cant" max="5">
 		<input type="submit" id="submit" value="Sumar">
<?php 
		for ($i=0; $i < 5; $i++) { 
			echo "<input type='hidden' id='num".$i."' value='".$vector[$i]."'>";
		}
?>	
 	<script type="text/javascript">
		
		$("#submit").click(function(){

			var num0 = $("#num0").val();
			var num1 = $("#num1").val();
			var num2 = $("#num2").val();
			var num3 = $("#num3").val();
			var num4 = $("#num4").val();
			var numb = $("#cant").val();
			var datos = {dato0:num0,dato1:num1,dato2:num2,dato3:num3,dato4:num4,num:numb};
			var cont=0;
		
				$.ajax({
				url: 'php/ejercicio12.1.php',
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
 