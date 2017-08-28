<?php

session_start( );
session_unset( );
session_destroy( );
$_SESSION = array();
    
echo '<script language="Javascript">location.href="../login.php";</script>";';

?>