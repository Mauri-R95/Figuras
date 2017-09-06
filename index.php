<!DOCTYPE html>
<html>
<head>
	<title>Calculo Figuras</title>
<style type="text/css">
	
	.imprimir(background-image:url() )

</head>
</style>
<script type="text/javascript">
	function Mostrar_cu(){
		document.getElementById("cal_cu").style.display = "block";
		document.getElementById("cal_t").style.display = "none";
		document.getElementById("cal_r").style.display = "none";
		document.getElementById("cal_ci").style.display = "none";
	}

	function Mostrar_t(){
		document.getElementById("cal_cu").style.display = "none";
		document.getElementById("cal_t").style.display = "block";
		document.getElementById("cal_r").style.display = "none";
		document.getElementById("cal_ci").style.display = "none";	
	}

	function Mostrar_r(){
		document.getElementById("cal_cu").style.display = "none";
		document.getElementById("cal_t").style.display = "none";
		document.getElementById("cal_r").style.display = "block";
		document.getElementById("cal_ci").style.display = "none";		
	}

	function Mostrar_ci(){
		document.getElementById("cal_cu").style.display = "none";
		document.getElementById("cal_t").style.display = "none";
		document.getElementById("cal_r").style.display = "none";
		document.getElementById("cal_ci").style.display = "block";			
	}

	
</script>
<body>
	<input type="image" id="bot_c" src="cuadrado.png" width="100px" height="100px" onclick="Mostrar_cu()" />
	<input type="image" id= "bot_t" src="triangulo.png" width="100px" height="100px" onclick="Mostrar_t()" />

	<input type="image" id="bot_r" src="rectangulo.png" width="150px" height="100px" onclick="Mostrar_r()" />

	<input type="image" id="bot_ci" src="circulo.png" width="111px" height="100px" onclick="Mostrar_ci()" />

	<section id="cal_cu" style="width: 300px;height: 200px; background: green;">	
		<div>
			Lado: <input type="text" id= "lado" name="lñado" /> <br>
			<br>
			<input type="submit" name="calcular" value="calcular" onclick="Cal_cu()" /> <br>	
			<br>
			<script type="text/javascript">
				function Cal_cu(){
					var lado, per, area;
					lado = document.getElementById('lado').value;
					per = 4*lado;
					area = 2*lado;
					document.getElementById('per_cu').innerHTML = per + " m";
					document.getElementById('ar_cu').innerHTML = area + " m2";
				}
			</script>
			Perimetro: <span id = "per_cu"></span>
			<br>
			Area     : <span id= "ar_cu"></span>
			<br>

		</div>	
	</section>

	<section id="cal_t" style="width: 300px;height: 200px; background: red; ">
		<div>
			
			Base: <input type="text" id= "base" name="base" /> <br>
			<br>
			Altura:<input type="text" id = "altura" name="altura" />	<br>
			<br>
			<input type="submit" name="calcular" value="calcular" onclick="Cal_t()" /> <br>	
			<br>
			<script type="text/javascript">
				function Cal_t(){
					var base, altura, per, area;
					base = document.getElementById('base').value;
					altura = document.getElementById('altura').value;
					per = base*3;
					area = (base*altura)/2;
					document.getElementById('per_t').innerHTML = per + " m";
					document.getElementById('ar_t').innerHTML = area + " m2";
				}
			</script>
			Perimetro: <span id = "per_t"></span>
			<br>
			Area     : <span id= "ar_t"></span>
			<br>

		</div>
	</section>
	<section id="cal_r" style="width: 300px;height: 200px; background: orange; ">
		<div>
			
			Largo: <input type="text" id= "largo" name="largo" /> <br>
			<br>
			Ancho:<input type="text" id = "ancho" name="ancho" />	<br>
			<br>
			<input type="submit" name="calcular" value="calcular" onclick="Cal_r()" /> <br>	
			<br>
			<script type="text/javascript">
				function Cal_r(){
					var largo, ancho, per, area;
					largo = document.getElementById('largo').value;
					ancho = document.getElementById('ancho').value;
					per = largo*2 + ancho*2;
					area = largo*ancho;
					document.getElementById('per_r').innerHTML = per + " m";
					document.getElementById('ar_r').innerHTML = area + " m2";
				}
			</script>
			Perimetro: <span id = "per_r"></span>
			<br>
			Area     : <span id= "ar_r"></span>
			<br>

		</div>
	</section>
	<section id="cal_ci" style="width: 300px;height: 200px; background: blue; ">		<div>
			Radio: <input type="text" id= "radio" name="radio" /> <br>
			<br>
			<input type="submit" name="calcular" value="calcular" onclick="Cal_ci()" /> <br>	
			<br>
			<script type="text/javascript">
				function Cal_ci(){
					var radio, per, area;
					var pi = 3.14;
					radio = document.getElementById('radio').value;
					per = 2*pi*radio;
					area = pi*radio*radio;
					document.getElementById('per_ci').innerHTML = per + " m";
					document.getElementById('ar_ci').innerHTML = area + " m2";
				}
			</script>
			Perimetro: <span id = "per_ci"></span>
			<br>
			Area     : <span id= "ar_ci"></span>
			<br>

		</div>
	</section>
	
	<script type="text/javascript">
		document.getElementById("cal_cu").style.display = "none";
		document.getElementById("cal_t").style.display = "none";
		document.getElementById("cal_r").style.display = "none";
		document.getElementById("cal_ci").style.display = "none";
	</script>
</body>
</html>