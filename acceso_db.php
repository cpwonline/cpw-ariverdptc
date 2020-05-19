 <?php
	/*$host_db = "mysql9.000webhost.com"; 
    $usuario_db = "a3770057_jyd";
    $clave_db = "jyd2615"; 
    $nombre_db = "a3770057_jyd"; 
	*/
    $host_db = "localhost";
    $usuario_db = "root";
    $clave_db = "";
    $nombre_db = "ariverd";
    
    //conectamos y seleccionamos db
    mysql_connect($host_db, $usuario_db, $clave_db);
    mysql_select_db($nombre_db);
?>