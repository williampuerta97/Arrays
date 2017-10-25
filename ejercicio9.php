<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Grupo 3</title>
</head>
<body>
	<header>
		<div class="header"><b>TALLER ARRAYS - PHP</b></div>
		<nav>
			<ul>
				<li><a href="index.php">Ejercicio 3</a></li>
				<li><a href="ejercicio6.php">Ejercicio 6</a></li>
				<li><a href="ejercicio9.php">Ejercicio 9</a></li>
				<li><a href="ejercicio12.php">Ejercicio 12</a></li>
				<li><a href="ejercicio15.php">Ejercicio 15</a></li>
				<li><a href="ejercicio18.php">Ejercicio 18</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="main">
		<section>
			
				<center><h2>9</h2></center>
				<div class="spacer"><b>Diseñe un algoritmo que lea un número cualquiera y lo busque en el arreglo X, el cualtiene almacenados 12 elementos. Escribir la posición donde se encuentra almacenado el número en el arreglo o el mensaje “NO” si no lo encuentra.
				</b></div>
				<div class="spacer">
						<?php for ($i=0; $i < 12; $i++) { 
							echo "<div>";
							echo "<label> Número ".($i+1)." </label>";
							echo "<input type='number' id='num".$i."'><b id='box".$i."''></b>";
							echo "</div>";
						} ?>
				</div>
				<div class="spacer">
					<button id="enviar" class="main">Enviar</button>
<!-- 				<button id="llenar" class="main">Rellenar</button> -->
				<div id="respuesta"></div>
				</div>
			
		</section>

		<aside>
			<p>Diseño básico e implementación de php</p>
			<p>William Steven Puerta Taquinas</p>
			<p>ADSI 2017</p>
			<p>SENA - UNICUCES</p>
			<p>PHP</p>
		</aside>
	</div>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$("#num9").css('width','161px');
		$("#num10").css('width','161px');
		$("#num11").css('width','161px');

		/*$("#llenar").click(function(){
			for (var i = 0; i < 12; i++) {
			document.getElementById('num'+i).value=i;
			}
		})*/
		
		$("#enviar").click(function(){

			var num0 = $("#num0").val(); var num1 = $("#num1").val();
			var num2 = $("#num2").val(); var num3 = $("#num3").val();
			var num4 = $("#num4").val(); var num5 = $("#num5").val();
			var num6 = $("#num6").val(); var num7 = $("#num7").val();
			var num8 = $("#num8").val(); var num9 = $("#num9").val();
			var num10 = $("#num10").val(); var num11 = $("#num11").val();
			
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
						 dato11:num11};
			var cont=0;

			for (var i = 0; i < 12; i++) {
				if ($("#num"+i).val() == "") {
					$("#num"+i).css('border','2px solid #f00');
					$("#box"+i).html(" El campo está vacio o contiene signos no válidos");
				}else{
					$("#num"+i).css('border','2px solid #c2c2a3');
					$("#box"+i).html("");
					cont++;
				}
			}
		
			if (cont==12) {
				$.ajax({
				url: 'php/ejercicio9.php',
				method: 'post',
				data : datos,
				success:function(datos){
					$("#respuesta").css('background-color','#e0e0d1');
					$("#respuesta").html(datos);
				},
				error:function(datos){
					$("#respuesta").css('background-color','#ff4d4d');
					$("#respuesta").html(datos);
				}
			})
		}
	})
		
	</script>
</body>
</html>