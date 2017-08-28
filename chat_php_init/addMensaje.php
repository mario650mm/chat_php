<?php 
require_once('functions/functions.inc.php');
require_once('lib/firebaseLib.php');
require_once('firebase/config.php');

$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje']:0;
$usuario = isset($_POST['usuario']) ? $_POST['usuario']:0;
$funciones = new Chat('Admin/');
$funciones->addMensaje($mensaje,$usuario);
$datos = array(
    'mensaje' => $mensaje,
    'usuario_id' => $usuario
);
$firebase->push(DEFAULT_PATH.'chat/', $datos);

?>