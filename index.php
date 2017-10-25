<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/logoSena.ico" /> 
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
			
				<center><h2>3</h2></center>
				<div class="spacer"><b>Llenar un arreglo de 5 elementos, imprimir la posición y el valor del elemento mayoralmacenado en el arreglo. Tenga en cuenta que todos los elementos del arreglo son diferentes.</b></div>
				<div class="spacer">
						<?php 

						for ($i=0; $i < 5; $i++) { 
							echo "<div>";
							echo "<label> Número ".($i+1)." </label>";
							echo "<input type='number' id='num".$i."'><b id='box".$i."''></b>";
							echo "</div>";
						} ?>
				</div>
				<div class="spacer">
					<button id="enviar" class="main">Enviar</button>
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
		
		$("#enviar").click(function(){

			var num0 = $("#num0").val();
			var num1 = $("#num1").val();
			var num2 = $("#num2").val();
			var num3 = $("#num3").val();
			var num4 = $("#num4").val();
			var datos = {dato0:num0,dato1:num1,dato2:num2,dato3:num3,dato4:num4};
			var cont=0;
			var error = false;
			var numeros = [num0,num1,num2,num3,num4];

			
			for (var i = 0; i < numeros.length; i++) {
				for (var j = 0; j < numeros.length; j++) {
					if (i!=j) {
						if (numeros[i]==numeros[j]) {
							error=true;
						}
					}
				}
			}

			for (var i = 0; i < 5; i++) {
				if ($("#num"+i).val() == "" ) {
					$("#num"+i).css('border','2px solid #f00');
					$("#box"+i).html(" El campo está vacio o contiene signos no válidos");
				}else{
					$("#num"+i).css('border','2px solid #c2c2a3');
					$("#box"+i).html("");
					cont++;
				}
			}
			
		
			if (cont==5 && !error) {
				$.ajax({
				url: 'php/ejercicio3.php',
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
		}else{
			$("#respuesta").css('background-color','#e0e0d1');
			$("#respuesta").html('Error, los datos no pueden ser iguales o no numéricos');
		}
	
	})
		
	</script>
</body>
</html>