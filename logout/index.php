<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Ariverd PTC | Pefil</title>
		<link rel="shorcut icon" href="../images/icon-small.png" type="image/png">
		<?php
			session_start();
			include('../acceso_db.php');
		?>
		<meta charset="utf-8">
		<!----Links de SCRIPT----->
			<script src="../js/funciones.js"></script>
			<script src="../js/jquery-1.11.1.min.js"></script>
			<script src="../js/jquery-3.0.0.min.js"></script>
		<!----Links de CSS----->
			<link rel="stylesheet" href="../css/estilos-gen.css" type="text/css">
			<link rel="stylesheet" href="../css/estilos-modal.css" type="text/css">
	</head>
	<body>
	<!--Cabecera-->
		<div class="cabecera">
			<div class="logo">
				<a href=""><img src="../images/icon.png" alt=""></a>
			</div>
			<div class="menu">
				<ul class="menu">
					<li id="principal"><a id="principala" onclick="cambiaPes('1');">Anuncios</a></li>
					<li><a onclick="document.querySelector('#pre_logout').style.display='block';">Cerrar sesi&oacute;n</a></li>
				</ul>
			</div>
		</div>
	<!--Fin Cabecera-->
	<!--Body2-->
		<div class="body2">
		<!--Contenedor-->
			<div class="contenedor">
				<?php
					if(isset($_SESSION['usuario_nombre'])) {
						session_destroy();
						header("location:../");
					}else {
						echo "<center style='color:#444;font-size:1.1em;margin-top:3em;margin-bottom:3em;'>Operaci&oacute;n incorrecta</center>";
					}
				?>
			</div>
		</div>
	<!--Fin body2-->
	<!--Footer-->
		<?php
			if(file_exists("pie.php")){include('pie.php');}else{include('../pie.php');}
		?>
	<!--Fin Footer-->
		<div id="pre_logout">
			<div id="pre">
				<div class="modal-content">
					<div class="header"><h2>Confirmaci&oacute;n</h2></div>
					<div class="copy" id="copy">
						<p style="text-align: center;">
							<center class="origi">&iquest;Desea cerrar sesi&oacute;n?</center>
						</p>
					</div>
					<div class="cf footer"><a class="btn-gen" href="../logout/">S&iacute;</a><a style="margin-left:1em;"class="btn-gen2" onclick="document.querySelector('#pre_logout').style.display='none';">Cancelar</a></div>
				</div>
				<div class="overlay"></div>
			</div>
		</div>
	</body>
</html>
