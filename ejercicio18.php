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
			
				<center><h2>3</h2></center>
				<div class="spacer"><b>Crear un formulario en el cual se reciban 2 numeros y un símbolo aritmético, y mostrar
										el resultado de la operación seleccionada con los numeros introducidos.</b></div>
				<div class="spacer">
					<input type="number" id="num1" placeholder="Número 1">
					<select id="signo">
				 		<option value="+">+</option>
				 		<option value="-">-</option>
				 		<option value="*">*</option>
				 		<option value="/">/</option>
				 	</select>
					<input type="number" id="num2" placeholder="Número 2">	
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

			var num1 = $("#num1").val();
			var num2 = $("#num2").val();
			var signo = $("#signo").val();


			var datos = {dato1:num1,dato2:num2,dato3:signo};
			var cont=0;

			for (var i = 1; i < 3; i++) {
				if ($("#num"+i).val() == "") {
					$("#num"+i).css('border','2px solid #f00');
					$("#box"+i).html(" El campo está vacio o contiene signos no válidos");
				}else{
					$("#num"+i).css('border','2px solid #c2c2a3');
					$("#box"+i).html("");
					cont++;
				}
			}
		
			if (cont==2) {
				$.ajax({
				url: 'php/ejercicio18.php',
				method: 'post',
				data : datos,
				success:function(datos){
					$("#respuesta").css('background-color','#e0e0d1');
					$("#respuesta").html('Resultado: '+datos);
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