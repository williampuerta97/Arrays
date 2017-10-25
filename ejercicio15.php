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
			
				<center><h2>15</h2></center>
				<div class="spacer"><b>.Diseñar el algoritmo correspondiente a un programa, que:
										<div>* Crea una matriz de 10x10 (filas x columnas) de nombre 'tabla'.</div>
										<div>* Carga la matriz de manera que las filas pares se rellenan con 1 y las filas impares con 0.</div>
										<div>* Una vez inicializada la matriz muestra su contenido en pantalla.</div>
									</b></div>
				<div class="spacer">
					<?php 
						echo "<div>";						
						echo "<table border=1>";
						for ($i=0; $i < 10; $i++) { 
							echo "<tr>";
							for ($j=0; $j < 10; $j++) { 
									echo "<td>?</td>";
							}
							echo "</tr>";
						}
						echo "</table>";

						echo "</div>";
					 ?>
				</div>
				<div class="spacer">
					<button id="enviar" class="main">Llenar</button>
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

				$.ajax({
				url: 'php/ejercicio15.php',
				method: 'post',
				success:function(data){
					$("#respuesta").css('background-color','#e0e0d1');
					$("#respuesta").html(data);
				}
			})
		})
		
	</script>
</body>
</html>