<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Ariverd PTC</title>
		<link rel="shorcut icon" href="images/icon-small.png" type="image/png">
		<?php
			session_start();
			//include('acceso_db.php');
		?>
		<meta charset="utf-8">
		<!----Links de SCRIPT----->
			<script src="js/funciones.js"></script>
			<script src="js/jquery-1.11.1.min.js"></script>
			<script src="js/jquery-3.0.0.min.js"></script>
		<!----Links de CSS----->
			<link rel="stylesheet" href="css/estilos-gen.css" type="text/css">
			<link rel="stylesheet" href="css/estilos-modal.css" type="text/css">
	</head>
	<body>
	<!--Cabecera-->
		<?php
			if(file_exists("cab.php")){include('cab.php');}else{include('../cab.php');}
			if(!empty($_SESSION['usuario_nombre'])){
				header("location:perfil/");
			}
		?>
	<!--Fin Cabecera-->
	<!--Body2-->
		<div class="body2">
		<!--Contenedor-->
			<div class="contenedor">
				<div class="contenido1">
					<div class="izq1">
						<p>&iexcl;Hola! Est&aacute;s en Ariverd.</p>
						<span id="izq_s">Aprovecha la oportunidad de conseguir <strong style="color:#009900;font-size:1.2em;text-decoration:underline;">Bsf</strong> viendo publicidad. &iexcl;Gratis, r&aacute;pido y seguro!</span>
					</div>
					<div class="der1">
						<a id="ir" href="registro/" class="btn-gen">&iexcl;Registrarme!</a><br><br><br>
						<a id="inf" href="#" class="btn-gen2">M&aacute;s info</a>
					</div>
				</div>
				<div class="contenido2">
					<ul class="articulos">
					<!--Artículos-->
						<li>
							<div class="izq_art">
								<a id="ir" href="registro/" class="btn-gen">&iexcl;Registrarme!</a><br><br><br>
								<a id="inf" href="#" class="btn-gen2">Contactar</a>
							</div>
							<div class="der_art">
								<h2>&iquest;Registrarme? &iquest;Para qu&eacute;?</h2>
								<p>     En el ingreso al mundo de las integrales, predisponemos y animamos a que el lector no se rinda ante el estudio de las mismas, sino que m&aacute;s bien tome aliento y se esfuerce por aprender cada d&iacute;a un poco m&aacute;s. Exigimos que el lector tenga fundamentos sobre derivadas, funciones, l&iacute;mites, productos notables, factorizaci&oacute;n, entre otros; temas del cual hablaremos en la secci&oacute;n 1.2 de este mismo cap&iacute;tulo.
								</p>
							</div>
						</li>
						<li>
							<div class="izq_art">
								<a id="ir" href="registro/" class="btn-gen">&iexcl;Registrarme!</a><br><br><br>
								<a id="inf" href="#" class="btn-gen2">Contactar</a>
							</div>
							<div class="der_art">
								<h2>&iquest;C&oacute;mo ganar dinero?</h2>
								<p>     En el ingreso al mundo de las integrales, predisponemos y animamos a que el lector no se rinda ante el estudio de las mismas, sino que m&aacute;s bien tome aliento y se esfuerce por aprender cada d&iacute;a un poco m&aacute;s. Exigimos que el lector tenga fundamentos sobre derivadas, funciones, l&iacute;mites, productos notables, factorizaci&oacute;n, entre otros; temas del cual hablaremos en la secci&oacute;n 1.2 de este mismo cap&iacute;tulo.
								</p>
							</div>
						</li>
					<!--Fin Artículos-->
					</ul>
				</div>
			</div>
		</div>
	<!--Fin body2-->
	<!--Footer-->
		<?php
			if(file_exists("pie.php")){include('pie.php');}else{include('../pie.php');}
		?>
	<!--Fin Footer-->
	</body>
</html>
