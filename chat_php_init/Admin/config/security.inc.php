<?php

session_start( );

$existe = isset( $_SESSION[ $varlogged ] );
$valida = ( $_SESSION[ $varlogged ] == $strlogged );

$dir = "";

while ( !file_exists( $dir.'login.php' ) )
{
   $dir .= '../';    
}

if ( !$existe || !$valida )
{
   echo '<script language="Javascript">top.location.href="'.$dir.'login.php";</script>';
}


?>