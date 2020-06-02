<?php
// datos para la coneccion a mysql 
$hostdb= "localhost";
$userdb= "root";
$passdb= "";
$db= "prueba";
 $mysql=new mysqli($hostdb,$userdb,$passdb,$db);
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
?> 



    
