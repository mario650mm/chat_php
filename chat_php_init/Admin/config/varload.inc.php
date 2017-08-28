<?

// Archivo que Contiene las Variables Generales del Sitio Dinámico
// -----------------------------------------------------------------------------

$system     = "Viparmex";
$varlogged  = "Logged_13365194584fa9ab224df4a";
$strlogged  = "13365194584fa9ab224df4a";


$arreglo = array( "SYSTEM"          => $system,
		 		  "LOGTITLE"        => "Panel de Administrador de ".$system." - Inicie Sesión",
				  "INDXTITLE"       => "Panel de Administrador de ".$system." - Bienvenido",
				  "NEWSTITLE"       => "Panel de Administrador de ".$system." - Sección de Noticias",
				  "NEWSFORMedit"    => "Panel de Administrador de ".$system." - Editar Noticias",
				  "NEWSFORMaddNews" => "Panel de Administrador de ".$system." - Agregar Noticias",
				  "REDMETA"         => '<meta http-equiv="refresh" content="2;URL=',
				  "MESGdropnew"     => 'Se elimino la noticia con exito.',
				  "MESGeditnew"     => 'Se actualizo la noticia con exito.',
				  "MESGaddnew"      => 'Se agrego la noticia con exito.',
				  "ROWCOLOR1"       => 'odd',		
				  "ROWCOLOR2"       => 'common',
				  "LIGHTCOLOR"      => '#C0C0C0',
				  "DARKCOLOR"       => '#9B9B9B',
				  "NONEWS"          => 'No Se Encontraron Noticias Registradas',
				  "NOUSER"          => 'No Se Encontraron Usuarios Registrados',
				  "NOMATERIAL"      => 'No Se Encontró Material Registrado',				 
				  "USERTITLE"       => "Panel de Administrador de ".$system." - Usuarios",
				  "USERFTITLEcheck" => "Panel de Administrador de ".$system." - Ver Usuario",
				  "USERFTITLEadd"   => "Panel de Administrador de ".$system." - Agregar Usuario",
				  "USERINFO"        => "Selecciona el nivel de usuario a consultar...",
				  "USERINFO1"       => "Nivel de usuario: ",
				  "USERINFO2"       => "No se encontraron usuarios...",
 				  "USERINFO3"       => "Actualmente viendo: Niveles de usuario...",
				  "USERINFO4"       => "Actualmente viendo: Mis Clientes",
				  "USERINFO5"       => "Mis Datos: ",
				  "USERINFO6"       => "Usted está en la seccion: Agregar Usuario ",
				  "USERINFOcheck"   => "Viendo detalles de usuario: ",
				  "NEWSCLASS1"      => 'newscommon',
				  "NEWSCLASS2"      => 'newsodd',
				  "NEWSDATECLASS1"  => 'newsdatecommon',
				  "NEWSDATECLASS2"  => 'newsdateodd' );	
				  			  
				  
$LIGHTCOLOR = $arreglo['LIGHTCOLOR'];
$DARKCOLOR  = $arreglo['DARKCOLOR'];

$ENCODED_VERSION = false;

//tamaño del crop en las noticias
$wNews = 400;
$hNews = 280;

//tamaño del crop en los eventos
$wEvents = 400;
$hEvents = 300;

//tamaño del crop en los eventos
$wGaleria = 470;
$hGaleria = 320;

// Noticias
// -----------------------------------------------------------------------------

// tamaño del crop en la galería
$IMAGEN_ANCHO_CROP = 140;
$IMAGEN_ALTO_CROP  = 160;

//tamaño recomendado para imágenes en la galería
$IMAGEN_ANCHO_RECOMENDADO = 400;
$IMAGEN_ALTO_RECOMENDADO = 300;

//tamaño recomendado para imágenes en la galería
$IMAGEN_ANCHO_THUMB = 140;
$IMAGEN_ALTO_THUMB  = 160;

// Promociones
// -----------------------------------------------------------------------------

// Tamaño del Crop Para Promociones
$IMAGEN_ANCHO_CROP_PROMOCION        = 399;
$IMAGEN_ALTO_CROP_PROMOCION         = 193;

// Tamaño Recomendado Para Promociones
$IMAGEN_ANCHO_RECOMENDADO_PROMOCION = 800;
$IMAGEN_ALTO_RECOMENDADO_PROMOCION  = 386;

// Tamaño Recomendado Para Promociones
$IMAGEN_ANCHO_THUMB_PROMOCION       = 399;
$IMAGEN_ALTO_THUMB_PROMOCION        = 193;

// Carteles de peliculas
//------------------------------------------------------------------------------

$IMAGEN_ANCHO_CARTEL = 150;
$IMAGEN_ALTO_CARTEL  = 220;

// Eventos
//------------------------------------------------------------------------------

$IMAGEN_ANCHO_CROP_EVENTOS        = 190;
$IMAGEN_ALTO_CROP_EVENTOS         =  92;

// Tamaño Recomendado Para Eventos
$IMAGEN_ANCHO_RECOMENDADO_EVENTOS = 400;
$IMAGEN_ALTO_RECOMENDADO_EVENTOS  = 300;

// Tamaño Recomendado Para Eventos
$IMAGEN_ANCHO_THUMB_EVENTOS       = 190;
$IMAGEN_ALTO_THUMB_EVENTOS        =  92;

// Tamaño de Banners Centrales
$IMAGEN_ANCHO_CROP_BANNER        = 659;
$IMAGEN_ALTO_CROP_BANNER         = 382;

// Tamaño Recomendado Para Eventos
$IMAGEN_ANCHO_RECOMENDADO_BANNER = 659;
$IMAGEN_ALTO_RECOMENDADO_BANNER  = 382;

// Tamaño Recomendado Para Eventos
$IMAGEN_ANCHO_THUMB_BANNER       = 659;
$IMAGEN_ALTO_THUMB_BANNER        = 382;

// Logo e Imagen del Directorio de Locatarios
$LOGO_ANCHO_CROP_DIRECTORIO			=146;
$LOGO_ALTO_CROP_DIRECTORIO			=61;

$IMAGEN_ANCHO_CROP_DIRECTORIO		=390;
$IMAGEN_ALTO_CROP_DIRECTORIO		=192;

$LOGO_ANCHO_CROP_DIRECTORIO_THUMB	=76;
$LOGO_ALTO_CROP_DIRECTORIO_THUMB	=30;

$IMAGEN_ANCHO_CROP_DIRECTORIO_THUMB	=98;
$IMAGEN_ALTO_CROP_DIRECTORIO_THUMB	=48;

// Galería
//-------------------------------------------------------------------------------

//tamaño recomendado para imágenes en la galería
$IMAGEN_ANCHO_RECOMENDADO_GALERIA = 400;
$IMAGEN_ALTO_RECOMENDADO_GALERIA  = 300;

//tamaño recomendado para imágenes en la galería
$IMAGEN_ANCHO_THUMB_GALERIA = 200;
$IMAGEN_ALTO_THUMB_GALERIA  = 200;

// tamaño del crop en la galería
$IMAGEN_ANCHO_CROP_GALERIA = 200;
$IMAGEN_ALTO_CROP_GALERIA  = 200;

// Recortes Galería Para Revista
//-------------------------------------------------------------------------------

// Tamaños recomendados
$IMAGEN_ANCHO_RECOMENDADO_RECORTES = array( 400, 400, 300 );
$IMAGEN_ALTO_RECOMENDADO_RECORTES  = array( 300, 300, 400 );

// Tamaños Para Thumbnails
$IMAGEN_ANCHO_THUMB_RECORTES       = array( 200, 200, 150 );
$IMAGEN_ALTO_THUMB_RECORTES        = array( 150, 150, 200 );

// Tamaños Para Recortes
$IMAGEN_ANCHO_CROP_RECORTE         = array( 174, 174, 115 );
$IMAGEN_ALTO_CROP_RECORTE          = array(  91,  75, 172 );


//-------------------------------------------------------------------------------

//Categorias
$IMAGEN_ANCHO_BANNER = 209;
$IMAGEN_ALTO_BANNER = 535;

$IMAGEN_ANCHO_BANNER_THUMB = 140;
$IMAGEN_ALTO_BANNER_THUMB = 160;
//-------------------------------------------------------------------------------

// Productos
//-------------------------------------------------------------------------------

// Tamaños recomendados para productos
$IMAGEN_ANCHO_RECOMENDADO_PRODUCTOS = 205;
$IMAGEN_ALTO_RECOMENDADO_PRODUCTOS 	= 573;

// Tamaños para Thumbnails para productos
$IMAGEN_ANCHO_THUMB_PRODUCTOS 	= 140;
$IMAGEN_ALTO_THUMB_PRODUCTOS 	= 140;

//-------------------------------------------------------------------------------

?>
