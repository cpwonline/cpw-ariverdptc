<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Ariverd PTC</title>
		<link rel="shorcut icon" href="images/icon-small.png" type="image/png">
		<?php
			session_start();
			if(file_exists("acceso_db.php.php")){include('acceso_db.php');}else{include('../acceso_db.php');}
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
			if(file_exists("cab.php")){include('cab.php');}else{include('../cab.php');}
		?>
	<!--Fin Cabecera-->
	<!--Body2-->
		<div class="body2">
		<!--Contenedor-->
			<div class="contenedor">
				
				<div class="sesion_tit">
					<span>Inicio de sesi&oacute;n en &iexcl;Ariverd PTC!</span>
				</div>
				<div class="inicio_sesion">
				<?php
					if(isset($_POST['enviar_llave'])){
						$usuario_llave = mysql_escape_string($_POST['usuario_llave']);
						$usuario_clave = mysql_escape_string($_POST['usuario_clave']);
						$usuario_nombre = mysql_escape_string($_POST['usuario_nombre']);
						
						$comp_llave = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre = '".$usuario_nombre."' AND usuario_clave = '".$usuario_clave."' ");

						if(mysql_num_rows($comp_llave)){
							
							//$comp2 = mysql_query("SELECT * FROM usuarios WHERE")
							$row = mysql_fetch_array($comp_llave);	
							if($row['usuario_llave']==$usuario_llave){
								$_SESSION['usuario_id'] = $row['usuario_id'];
								$_SESSION['usuario_nombre'] = $row['usuario_nombre'];
								$_SESSION['usuario_admin'] = $row['usuario_admin'];
								$_SESSION['usuario_control'] = $row['usuario_control'];
								$_SESSION['usuario_apr'] = $row['usuario_apr'];
								$_SESSION['usuario_llave'] = $row['usuario_llave'];
								header("location:../perfil/");
							}else{
								echo "<center style='padding:0.5em;color:#444;font-size:1.2em;'>Llave incorrecta.</center>";
							}
							mysql_free_result($comp_llave);
						}
					}
					if(isset($_POST['verificar_usuario'])){
						$usuario_nombre = mysql_escape_string($_POST['usuario_nombre']);
						$usuario_clave = mysql_escape_string($_POST['usuario_clave']);
						
						$comp = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre='".$usuario_nombre."' AND usuario_clave= '".$usuario_clave."' ");
						
						if(mysql_num_rows($comp)){
							//$comp2 = mysql_query("SELECT * FROM usuarios WHERE")
							$row = mysql_fetch_array($comp);
							if($row['usuario_admin']!=="admin"){
								$_SESSION['usuario_id'] = $row['usuario_id'];
								$_SESSION['usuario_nombre'] = $row['usuario_nombre'];
								$_SESSION['usuario_admin'] = $row['usuario_admin'];
								$_SESSION['usuario_control'] = $row['usuario_control'];
								$_SESSION['usuario_apr'] = $row['usuario_apr'];
								$_SESSION['usuario_llave'] = $row['usuario_llave'];
								header("location:../perfil/");
							}else{
							?>
									<div id="pre_llave" style="display:block;">
										<div id="pre">
											<div class="modal-content">
												<div class="header" style="overflow:hidden;>
													<h2 style="float:left;">Bienvenido Administrador</h2>
													<a style="float:right;" style="padding:0.5em;" onclick="document.querySelector('#pre_admin').style.display='none';">Cancelar</a>
												</div>
													<div class="copy" id="copy">
														<p style="text-align: left;">
																<span style="font-size:1.1em;color:#444;">Ingrese su llave</span>
																<form style="display:inline-block;" name="form_llave" action="" method="POST">
																	<input placeholder="Llave" type="password" name="usuario_llave" maxlenght="4" style="border:1px solid hsla(242,50%,50%,0.8);padding:5px 10px; color:#444;font-size:1.1em;margin-top:0.3em;margin-bottom:0.7em;display:block;"/>
																	<input typ="text"  style="display:none;" name="usuario_nombre" value="<?=$usuario_nombre?>"/>
																	<input typ="text"  style="display:none;" name="usuario_clave" value="<?=$usuario_clave?>"/>
																	<button action="" type="submit" name="enviar_llave" class="btn-gen">Confirmar</button>
																</form>	
																
														</p>
													</div>
													<div class="cf footer"></div>
											</div>
											<div class="overlay"></div>
										</div>
									</div>
							<?php
							}
						}else{
							echo "<center style='padding:0.5em;color:#444;font-size:1.2em;'>Usuario o contrase&ntilde;a incorrecto.</center>";
						}
						mysql_free_result($comp);
					}
					if(!empty($_SESSION['usuario_nombre'])){
						echo "<center style='padding:0.5em;color:#444;font-size:1.2em;'>Bienvenido estimado ".$_SESSION['usuario_nombre'];
					}else{
				?>
					<form class="registro_usuario" action="" method="POST">
						<input type="text" name="usuario_nombre" placeholder="Escriba su nombre de usuario" required autofocus/>
						<input type="password" name="usuario_clave" placeholder="Escriba su contrase&ntilde;a" required/>
						<button type="submit" name="verificar_usuario" class="btn-gen">Iniciar sesi&oacute;n</button>
					</form>
				<?php
					}
				?>
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
