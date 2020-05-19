<!DOCTYPE HTML>
<html lang="es">
	<head>
		<title>Ariverd PTC | Registro</title>
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
			if(file_exists("cab.php")){include('cab.php');}else{include('../cab.php');}
		?>
	<!--Fin Cabecera-->
	<!--Body2-->
		<div class="body2">
		<!--Contenedor-->
			<div class="contenedor">
				<div class="contenido1" style="padding-top:2em;">
					<div class="izq1">
						<p style="text-shadow:1px 1px 1px hsla(0,0%,70%,0.2);">Escribe todos tus datos</p>
						<div class="cont_registro">
						<?php
							if(isset($_POST['enviar_registro'])){
								$usuario_nombre = mysql_escape_string($_POST['usuario_nombre']);
								$usuario_email = mysql_escape_string($_POST['usuario_email']);
								$usuario_clave = mysql_escape_string($_POST['usuario_clave']);
								$usuario_clave_conf = mysql_escape_string($_POST['usuario_clave_conf']);
								$usuario_datos_nombre = mysql_escape_string($_POST['usuario_datos_nombre']);
								$usuario_datos_apellido = mysql_escape_string($_POST['usuario_datos_apellido']);
								$usuario_datos_cedula = mysql_escape_string($_POST['usuario_datos_cedula']);
								$usuario_datos_tel = mysql_escape_string($_POST['usuario_datos_tel']);
								$usuario_datos_direccion = mysql_escape_string($_POST['usuario_datos_direccion']);
								$usuario_datos_fnac = mysql_escape_string($_POST['usuario_datos_fnac']);
								
								if(empty($usuario_nombre)){
								}elseif(empty($usuario_email)){
								}elseif(empty($usuario_clave)){
								}elseif(empty($usuario_clave_conf)){
								}elseif(empty($usuario_datos_nombre)){
								}elseif(empty($usuario_datos_apellido)){
								}elseif(empty($usuario_datos_cedula)){
								}elseif(empty($usuario_datos_tel)){
								}elseif(empty($usuario_datos_direccion)){
								}elseif(empty($usuario_datos_fnac)){
								}else{
									$sin_espacios = count_chars($_POST['usuario_nombre'], 1);//Espacios
									$c=0;
									for($a=0;$a<strlen($usuario_nombre);$a++){
										$c++;
									}
									$b=0;
									for($a=0;$a<strlen($usuario_clave);$a++){
										$b++;
									}
									$rev_nombre = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre = '".$usuario_nombre."'");
									$rev_tel = mysql_query("SELECT * FROM usuarios WHERE usuario_datos_tel = '".$usuario_datos_tel."'");
									
									
								$rev_ced = mysql_query("SELECT * FROM usuarios WHERE usuario_datos_cedula = '".$usuario_datos_cedula."' ");
								$rev_email = mysql_query("SELECT * FROM usuarios WHERE usuario_email = '".$usuario_email."' ");
								$rev_nombre = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre = '".$usuario_nombre."' ");
								$rev_tel = mysql_query("SELECT * FROM usuarios WHERE usuario_datos_tel = '".$usuario_datos_tel."' ");
								
									if($usuario_clave!==$usuario_clave_conf){
										echo "<div class='m_error'><span>Las claves no son id&eacute;nticas</span></div>";
									}elseif(mysql_num_rows($rev_nombre)>0){
										echo "<div class='m_error'><span>Este nombre de usuario actualmente est&aacute; registrado en nuestro sistema</span></div>";
									}elseif(mysql_num_rows($rev_email)>0){
										echo "<div class='m_error'><span>Esta direcci&oacute;n de correo electr&oacute;nico ya est&aacute; registrada en nuestro sistema</span></div>";
									}elseif(mysql_num_rows($rev_ced)>0){
										echo "<div class='m_error'><span>Esta c&eacute;dula ya est&aacute; registrada en nuestro sistema</span></div>";
									}elseif(mysql_num_rows($rev_tel)>0){
										echo "<div class='m_error'><span>Este n&uacute;mero telef&oacute;nico ya se encuentra registrado en nuestro sistema</span></div>";
									}elseif(!empty($sin_espacios[32])) {//Espacios
										echo "<div class='m_error'><span>El nombre de usuario no debe contener espacios</span></div>";
									}elseif($c<6){
										echo "<div class='m_error'><span>El nombre de usuario no debe contener menos de 6 car&aacute;cteres</span></div>";
									}elseif($b<6){
										echo "<div class='m_error'><span>La contrase&ntilde;a no debe contener menos de 6 car&aacute;cteres</span></div>";
									}else{
										$usuario_apr_cod = substr(md5(rand()),0,20);
										$reg_usuario = mysql_query("INSERT INTO usuarios(usuario_nombre, usuario_clave, usuario_email, usuario_datos_nombre, usuario_datos_apellido, usuario_datos_cedula, usuario_datos_tel, usuario_datos_fnac, usuario_freg, usuario_apr_cod, usuario_datos_direccion) VALUES('".$usuario_nombre."', '".$usuario_clave."', '".$usuario_email."', '".$usuario_datos_nombre."', '".$usuario_datos_apellido."', '".$usuario_datos_cedula."', '".$usuario_datos_tel."', '".$usuario_datos_fnac."', NOW(), '".$usuario_apr_cod."', '".$usuario_datos_direccion."') ");
										if($reg_usuario){
											//Creación de la sesión
												$sql = mysql_query("SELECT * FROM usuarios WHERE usuario_nombre = '".$usuario_nombre."' AND usuario_clave = '".$usuario_clave."' ");
												if(mysql_num_rows($sql)){
													$row = mysql_fetch_array($sql);
														$_SESSION['usuario_id'] = $row['usuario_id'];
														$_SESSION['usuario_nombre'] = $row['usuario_nombre']; 
														$_SESSION['usuario_admin'] = $row['usuario_admin']; 
														$_SESSION['usuario_control'] = $row['usuario_control'];
														$_SESSION['usuario_apr'] = $row['usuario_apr'];
														
	/*/Mensaje al correo
		$para  = $usuario_correo; 

		$título = 'Registro de la cuenta | Ariverd PTC';

		$mensaje = '
		<html>
		<head>
		  <title>Registro de la cuenta | Ariverd PTC</title>
		</head>
		<body>
			<center style="padding:1em;background:#bbb;margin-bottom:0.3em">
				<span style="font-size:1.5em;color:#EEE;text-shadow:0px 1px 0px rgba(0, 0, 0, 0.25);">JyD</span>
			</center>
<div style="display:block;color:#444;font-size:1.2em;text-shadow:0px 1px 0px rgba(0, 0, 0, 0.25);margin-bottom:0.3em;">¡Hola! Bienvenido a Ariverd PTC, una web donde podr&aacute;s ganar dinero en <strong>	Bsf</strong>. Estos son los datos de tu cuenta, no olvides verificarla.</div>
		  
		  <div style="display:block;color:#444;font-size:1.2em;text-shadow:0px 1px 0px rgba(0, 0, 0, 0.25);margin-bottom:0.3em;">Nombre de usuario: <strong>'.$usuario_nombre.'</strong></div>
		  <div style="display:block;color:#444;font-size:1.2em;text-shadow:0px 1px 0px rgba(0, 0, 0, 0.25);margin-bottom:0.3em;">Clave: <strong>'.$usuario_clave.'</strong></div>
		  <div style="display:block;color:#444;font-size:1.2em;text-shadow:0px 1px 0px rgba(0, 0, 0, 0.25);margin-bottom:0.3em;">Correo: <strong>'.$usuario_correo.'</strong></div>
		  <div style="display:block;color:#444;font-size:1.2em;text-shadow:0px 1px 0px rgba(0, 0, 0, 0.25);margin-bottom:0.3em;">C&oacute;digo de confirmaci&oacute;n: <strong>'.$usuario_apr_cod.'</strong></div>

		</body>
		</html>
		';

		// Para enviar un correo HTML, debe establecerse la cabecera Content-type
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Cabeceras adicionales
		$cabeceras .= 'From: AriverPTC-contact<info@jyd.comxa.com>' . "\r\n";
		$cabeceras .= 'Cc: JyD-info<info@jyd.comxa.com' . "\r\n";
		$cabeceras .= 'Bcc: JyD-info<info@jyd.comxa.com' . "\r\n";

		// Enviarlo
		mail($para, $título, $mensaje, $cabeceras);
		
	//Fin Mensaje al correo*/
												header("Location: ../perfil/");
												}else{
													echo "<center style='padding:0.3em;border:1px solid #ccc;'>Disc&uacute;lpenos, ha ocurrido un problema al iniciar sesi&oacute;n. Por favor, int&eacute;nte iniciar sesi&oacute;n</center>";
												}
										}else{
											echo "<center style='padding:0.3em;border:1px solid #ccc;'>Disc&uacute;lpenos, ha ocurrido un problema al intentar guardar sus datos. Por favor, int&eacute;ntelo nuevamente</center>";
										}
									}
								}
							}
						?>
							<center>
								<form class="registro_usuario" name="registroUsuario" method="POST" action="">
									<input type="text" name="usuario_nombre" placeholder="Escribe un nombre de usuario" maxlength="20" required autofocus/>
									<input type="email" name="usuario_email" placeholder="Escribe tu correo electr&oacute;nico" maxlength="200" required/>
									<input type="password" name="usuario_clave" placeholder="Escribe tu clave" maxlength="20" required/>
									<input type="password" name="usuario_clave_conf" placeholder="Confirma tu clave" maxlength="20" required/>
									<input type="text" name="usuario_datos_nombre" placeholder="Escribe tus nombres" maxlength="20" required/>
									<input type="text" name="usuario_datos_apellido" placeholder="Escribe tus apellidos" maxlength="20" required/>
									<input type="text" name="usuario_datos_cedula" placeholder="Escribe tu c&eacute;dula" maxlength="20" required/>
									<input type="tel" name="usuario_datos_tel" placeholder="Escribe tu n&uacute;mero telef&oacute;nico" maxlength="20" required/>
									<input type="text" name="usuario_datos_direccion" placeholder="Escribe tu direcci&oacute;n" maxlength="100" required/>
									<input type="date" name="usuario_datos_fnac" maxlength="20" required/>
									<button type="submit" name="enviar_registro" class="btn-gen">&iexcl;Registrarme!</button><br><br><br>
								</form>
							<center>
						</div>
					</div>
					<div class="der1">
						<a id="ir2" href="#" class="btn-gen2">Informaci&oacute;n</a><br><br><br>
						<a id="ir2" href="#" class="btn-gen2">Ayuda</a><br><br><br>
						<div class="inf_der1">
							<P id="tit">&iquest;Sab&iacute;as que?</p>
							<P>Nuestra p&aacute;gina web cuenta con un sistema de codificado con un &iacute;ndice altamente indescifrable. As&iacute; que, &iexcl;los Hackers durar&aacute;n un buen rato para descubrir tus datos!</p>
							
						</div>
					</div>
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
