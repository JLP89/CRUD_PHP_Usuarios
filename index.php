<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practica PHP</title>
 <style>
  .tablaU {
    border-collapse: collapse;
    box-shadow: 0px 0px 8px #000;
    margin:20px;
  }
  .tablaU th{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#ffd040;	  
  }  
  .tablaU td{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#ffdd73;	  
  }
  </style>
</head>

<body>
<table class ="tablaU">
<tr><th> Usuarios </th></tr>
	<tr>
		<td>
			<a href="Practica.php">Insertar nuevo usuario</a>
		</td>
	</tr>
<br />
<tr>
	 <td>
	 	<a href="consultar.php">Consultar usuarios</a>
	</td>
</tr>
<br />
<tr>
		<td>
 		 <a href="modificar.php">Modificar usuario</a>
 		 <br />
 	   </td>
  </tr>
  <tr>
		<td>
			<a href="eliminar.php">Eliminar usuario</a>
		<br />
		</td>
 </tr>
</table>
</body>
</html>