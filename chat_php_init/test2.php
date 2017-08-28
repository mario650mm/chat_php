<?php 
/*require_once('vendor/ktamas77/firebase-php/src/firebaseInterface.php');
require_once('vendor/ktamas77/firebase-php/src/firebaseLib.php');*/


//require_once('lib/firebaseInterface.php');
require_once('lib/firebaseLib.php');

const DEFAULT_URL = 'https://notificacion-cd32e.firebaseio.com/';
const DEFAULT_TOKEN = '64QzS77eJ3kf06FJ2FpRtG1nNqCPsWiqLkyyJibU';
const DEFAULT_PATH = '/Notificaciones/usuarios/';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

// --- storing an array ---
$data = array(
    "nombre" => 'prueba500',
    "apellidos" => 'prueba500',
    "usuario" => 'prueba500',
    "pass" => 'secret'
);


$firebase->push(DEFAULT_PATH, $data);
?>