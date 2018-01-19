<?php
	
	define("SERVIDOR","localhost");
	define("USUARIO","el usuario");
	define("CLAVE","la clave");
	define("BASE_DATOS","agenda");
	
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	function Conexion()
	{
	   if (!($cn=mysql_connect(SERVIDOR,USUARIO,CLAVE)))
	   {
		  echo "Error conectando a la base de datos.";
		  exit();
	   }
	   if (!mysql_select_db(BASE_DATOS,$cn))
	   {
		  echo "Error seleccionando la base de datos.";
		  exit();
	   }
	   
	   return $cn;
	   
	}	

?>