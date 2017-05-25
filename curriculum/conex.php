<?php  
   
 function Conectarse() {

   $host = "localhost";
   $user = "root";
   $pass = "";
   $database = "curriculum";

   $link = new mysqli($host, $user, $pass, $database);
   $acentos = $link->query("SET NAMES 'utf8'");

   if($link->connect_errno > 0) {
      echo "ERROR CONECTANDO A LA BASE DE DATOS<br />";
   } else {
      return $link;
   }

}


?>