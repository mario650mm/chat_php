<?php 
session_start();
require_once('functions/functions.inc.php');
require_once('lib/firebaseLib.php');
require_once('firebase/config.php');

$nombre = isset($_POST['nombre']) ? $_POST['nombre']:0;
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos']:0;
$usuario = isset($_POST['usuario']) ? $_POST['usuario']:0;
$pass = isset($_POST['pass']) ? $_POST['pass']:0;
$funciones = new Chat('Admin/');
$registro = $funciones->addUsuario($nombre,$apellidos,$usuario,$pass);
$datos = array(
    'nombre' => $nombre,'apellidos' => $apellidos,
    'usuario' => $usuario,'pass' => $pass
);
$firebase->push(DEFAULT_PATH.'usuarios/', $datos);
if($registro != ''){
	$_SESSION['usuario_id'] = $registro;
	$_SESSION['nombre'] = $nombre;
	$_SESSION['apellidos'] = $apellidos;
	$_SESSION['username'] = $usuario;
	$_SESSION['password'] = $pass;
	echo 1;exit;
}else{
	echo 0;exit;
}

?>