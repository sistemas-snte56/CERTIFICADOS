<?php
// $db_host="localhost";
// $db_usuario="root";
// $db_password="";
// $db_nombre="db_ven01";
// $conexion = @mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error());
// $db = @mysql_select_db($db_nombre, $conexion) or die(mysql_error());

$mysqli = new mysqli('127.0.0.1', 'root', '', 'db_ven01');
$mysqli->set_charset("utf8");

?> 
