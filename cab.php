<div class="cabecera">
	<?php
		$arc = "cab.php";
		if(file_exists($arc)){
	?>
			<div class="logo">
				<a href=""><img src="images/icon.png" alt=""></a>
			</div>
			<div class="menu">
				<ul class="menu">
					<li><a href="">Principal</a></li>
					<li><a href="registro/">Registro</a></li>
					<li><a href="login/">Iniciar sesi&oacute;n</a></li>
				</ul>
			</div>
	<?php
		}else{
	?>
			<div class="logo">
				<a href="../"><img src="../images/icon.png" alt=""></a>
			</div>
			<div class="menu">
				<ul class="menu">
					<li><a href="../">Principal</a></li>
					<li><a href="../registro/">Registro</a></li>
					<li><a href="../login/">Iniciar sesi&oacute;n</a></li>
				</ul>
			</div>
	<?php
		}
	?>
</div>