<?php

session_start( );

if ( !isset( $_SESSION[ $varlogged ] ) )
{
   echo '<script language="Javascript">top.location.href="login.php";</script>';
}

?>