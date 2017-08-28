<?php
 class Chat{    
    private  $DIR;
   	function Chat($dist)
	{		
        require_once($dist.'config/adodb/adodb.inc.php');			
        require_once($dist.'config/dbconfig.php');
        $this->DIR = $dist;
		$db = &ADONewConnection(CONTROLER); # eg 'mysql' o 'postgres'
		//$db->debug = true;
		if(CONTROLER=='mysqli')
		{
		  $db->Connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
		}
		elseif(CONTROLER=='access')
		{
		  $db->PConnect(DBNAME);
		}		
		$this->dbc= $db;
    }


    function login($usuario,$pass){
    	$sql = "select id,nombre,apellidos,usuario,pass from usuarios where usuario='$usuario' and pass='$pass';";
    	return $this->dbc->Execute($sql);
    }

    function addMensaje($mensaje,$usuario){
        $sql = "INSERT INTO chat_old(mensaje,usuario_id) values('$mensaje','$usuario');";
        $this->dbc->Execute($sql);
    }

    function addUsuario($nombre,$apellidos,$usuario,$pass){
        $sql = "INSERT INTO usuarios(nombre,apellidos,usuario,pass) VALUES('$nombre','$apellidos','$usuario','$pass');";
        $this->dbc->Execute($sql);
        $sql = "SELECT MAX(id) as id FROM usuarios;";
        $rs = $this->dbc->Execute($sql);
        return intval($rs->fields['id']);
    }

		
}
?>