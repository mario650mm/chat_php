<?	
    define(LOCAL, 0);

	$modo =  LOCAL;	
	if ( $modo == LOCAL )
	{
		define(CONTROLER,'mysqli');	
		define(DBNAME, 'notificaciones');
		define(DBPREFIX, '');
		define(SERVERNAME, 'localhost');
		define(USERNAME, 'root');
		define(PASSWORD, 'vzert2017');
	}
	
?>