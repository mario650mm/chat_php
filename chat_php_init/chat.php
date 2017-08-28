<?php 
session_start();
require_once('functions/templates.inc.php');
if(isset($_SESSION['usuario_id'])){
	$mainTemplate = new template();
	$mainTemplate->addTemplate('chat');
	$colours = array('007AFF','FF7000','FF7000','15E25F','CFC700','CFC700','CF1100','CF00BE','F00');
	$user_colour = array_rand($colours);
	$mainTemplate->asigna_variables(array(
		'USUARIO_ID' => $_SESSION['usuario_id'],
		'NOMBRE' => $_SESSION['nombre'].' '.$_SESSION['apellidos'],
		'USUARIO' => $_SESSION['username']
	));
	$mainTemplate->compileandgo();
}else{
	header('location:index.php?error=1');
}


?>
