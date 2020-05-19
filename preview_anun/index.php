<!DOCTYPE HTML>
<html lang="es">
	<head>
		<link rel="shorcut icon" href="../images/icon-small.png" type="image/png">
		<?php
			session_start();
			include('../acceso_db.php');
		?>
	<?php
		$url='http://'.mysql_real_escape_string($_GET['url']);

		$public_nombre = $url;
		$nombre="";
		for($a=0;$a<strlen($public_nombre);$a++){
			if($a<30){
				$nombre = $nombre.$public_nombre{$a};
			}
		}
		$url2 = $nombre."...";
		
		$id=mysql_real_escape_string($_GET['id']);
		
	?>
		<title>Ariverd PTC | <?=$url?></title>
		<meta charset="utf-8">
		<!----Links de SCRIPT----->
			<script src="../js/funciones.js"></script>
			<script src="../js/jquery-1.11.1.min.js"></script>
			<script src="../js/jquery-3.0.0.min.js"></script>
		<!----Links de CSS----->
			<link rel="stylesheet" href="../css/estilos-gen.css" type="text/css">
			<link rel="stylesheet" href="../css/estilos-modal.css" type="text/css">
	</head>
	<body onload="aparecer();">
	<!--Contador de cabecera-->
		<div class="contador">
			<div class="zona_conteo">
				<span class="span_escrito">Haga click encima del bot&oacute;n</span>
				<a class="btn-gen" id="btn_prin_contador" onclick="mostrar_alerta();">Contar</a>
				<h2 class="cuenta_atras">5</h2>
			</div>
			<div class="zona_url">
				<span style="font-size:1em;color:#444;"><?=$url2?></span>
				<a style="fon-size:1em; padding:2px 5px; margin-left:0.3em;" class="btn-gen" href="<?=$url?>" target="_blank">Ver aparte</a>
			</div>
		</div>
		<div class="contador_espera">
			<div class="zona_conteo">
				<span class="span_escrito">Por favor, espere que la página cargue completamente.</span>
			</div>
			<div class="zona_url">
				<span style="font-size:1em;color:#444;"><?=$url2?></span>
				<a style="fon-size:1em; padding:2px 5px; margin-left:0.3em;" class="btn-gen" href="<?=$url?>" target="_blank">Ver aparte</a>
			</div>
		</div>
	<!--Fin Contador de cabecera-->
	
		<!--Contenedor-->
			<div class="contenedor">
				<iframe style="width:100%;height:50em;border:none;display:block;" src="<?=$url?>"></iframe>
			</div>
		<!--Footer-->
			<?php if(file_exists("pie.php")){include('pie.php');}else{include('../pie.php');} ?>
		<!--Fin Footer-->
	</body>
</html>
