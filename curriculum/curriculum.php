<?php 
session_start();
if(isset($_SESSION['valida'])){
include 'up.php';
 ?>
<div id="contenido">
	<h1>Bienvenido</h1>
	<img src="img/escudo.png" class="imagen-inicio">
</div>
 <?php include 'down.php'; } else {
 	header('location:index.php');
 	} ?>