<?php 
session_start();
require_once('functions/functions.inc.php');
$usuario = isset($_POST['usuario']) ? $_POST['usuario']:0;
$pass = isset($_POST['pass']) ? $_POST['pass']:0;
$funciones = new Chat('Admin/');
$usuario_row = $funciones->login($usuario,$pass);
if(!$usuario_row->EOF){
	$_SESSION['usuario_id'] = $usuario_row->fields['id'];
	$_SESSION['nombre'] = $usuario_row->fields['nombre'];
	$_SESSION['apellidos'] = $usuario_row->fields['apellidos'];
	$_SESSION['username'] = $usuario_row->fields['usuario'];
	$_SESSION['password'] = $usuario_row->fields['pass'];
	echo 1;exit;
}else{
	echo 0;exit;
}

?>