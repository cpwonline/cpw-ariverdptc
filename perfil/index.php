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
			<?php
				if(!empty($_SESSION['usuario_nombre'])){
			?>
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
			<?php
				}else{
					if(file_exists("cab.php")){include('cab.php');}else{include('../cab.php');}
				}
			?>
	<!--Fin Cabecera-->
	<!--Body2-->
		<div class="body2">
		<!--Contenedor-->
			<div class="contenedor">
			<?php
				if(empty($_SESSION['usuario_nombre'])){
					echo "<center style='padding:1em;border:1px solid #ccc;'>Disculpe, debe iniciar sesi&oacute;n para acceder a su perfil.</center>";
				}else{
					if($_SESSION['usuario_admin']=="none"){
			?>
					
				<!--Vista usuario-->
				<div class="vista_usuario">
					<p class="nombre_usuario"><?=$_SESSION['usuario_nombre']?></p>
					<?php
						$nuevo_color = substr(md5(rand()),0,6);
					?>
					<p class="dinero_o" style="color:#<?=$nuevo_color?>">Bsf 0,00</p>
					<ul class="vistas">
						<li>
							<div class="tit_vistas">Opciones generales</div>
							<div class="opc">
								<a id="la_2" onclick="cambiaPes('2');">Mi cuenta</a>
								<a id="la_3" onclick="cambiaPes('3');">Mis datos personales</a>
							</div>
						</li>
						<li>
							<div class="tit_vistas">Anuncios</div>
							<div class="opc">
								<a id="la_4" onclick="cambiaPes('4');">Estadísticas generales</a>
								<a id="la_5" onclick="cambiaPes('5');">Cobrar</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="contenedor_ventanas">
					<div class="contenido_anuncios" id="pes_1">
						<div class="tit_anuncios">Tus anuncios</div>
						<ul class="filas">
							<li class="primera_fila">
								<?php
									$total="10";
									for($n=0;$n<$total;$n++){
										$nuevo_color = substr(md5(rand()),0,6);
								?>
										<div class="anun_1" style="background:#<?=$nuevo_color?>">
											<p class="precio">20Bsf</p>
											<p class="company"><span>JyD<span></p>
											<a href="../preview_anun/?url=localhost:8080/jyD/&id=3" target="_blank" class="btn-gen">&iexcl;Ver!</a><br><br>
										</div>
								<?php
									}
								?>
							</li>
						</ul>
					</div>
					<div id="pes_2" class="contenido_anuncios" style="display:none;">
						<div class="tit_anuncios">Mi cuenta</div>
						<ul class="filas">
						</ul>
					</div>
					<div id="pes_3" class="contenido_anuncios" style="display:none;">
						<div class="tit_anuncios">Mis datos personales</div>
						<ul class="filas">
						</ul>
					</div>
					<div id="pes_4" class="contenido_anuncios" style="display:none;">
						<div class="tit_anuncios">Estadísticas generales</div>
						<ul class="filas">
						</ul>
					</div>
					<div id="pes_5" class="contenido_anuncios" style="display:none;">
						<div class="tit_anuncios">Cobrar</div>
						<ul class="filas">
						</ul>
					</div>
				</div>
			</div>
			<?php
				}
				
				//Si es administrador
				if($_SESSION['usuario_admin']=="admin"){
			?>
			<a class="btn-gen" onclick="cambiaPes2('1','pes_1','8');">Ver</a>
				<!--Vista administrador-->
				<div class="vista_usuario">
					<span style="color:#DDD;">Bienvenido administrador</span>
					<p class="nombre_usuario"><?=$_SESSION['usuario_nombre']?></p>
					<?php
						$nuevo_color = substr(md5(rand()),0,6);
					?>
					<p class="dinero_o" style="color:#<?=$nuevo_color?>">Bsf 0,00</p>
					<ul class="vistas">
						<li>
							<div class="tit_vistas">Opciones generales</div>
							<div class="opc">
								<a id="la_2" onclick="cambiaPes('2');">Cuentas</a>
								<a id="la_3" onclick="cambiaPes('3');">Datos personales</a>
							</div>
						</li>
						<li>
							<div class="tit_vistas">Anuncios</div>
							<div class="opc">
								<a id="la_4" onclick="cambiaPes('4');">Estadísticas generales</a>
								<a id="la_5" onclick="cambiaPes('5');">Agregar o quitar anuncios</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="contenedor_ventanas">
					<div class="contenido_anuncios" id="pes_1">
						<div class="tit_anuncios">Anuncios</div>
						<ul class="filas">
						</ul>
					</div>
					<div id="pes_2" class="contenido_anuncios" style="display:none;">
						<div class="tit_anuncios">Cuentas de los usuarios</div>
						<ul class="filas">
						</ul>
					</div>
					<div id="pes_3" class="contenido_anuncios" style="display:none;">
						<div class="tit_anuncios">Datos personales</div>
						<ul class="filas">
						</ul>
					</div>
					<div id="pes_4" class="contenido_anuncios" style="display:none;">
						<div class="tit_anuncios">Estadísticas generales</div>
						<ul class="filas">
						</ul>
					</div>
					<div id="pes_5" class="contenido_anuncios" style="display:none;">
						<div class="tit_anuncios">Agregar o quitar anuncios</div>
						<ul class="filas">
						</ul>
					</div>
				</div>
			</div>
			<?php
				}
			}
			?>
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
