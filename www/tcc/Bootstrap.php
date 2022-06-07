<?php
	//Exibe erros PHP
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	//Minificaçao de headers HTTP
	ob_start('ob_gzhandler');

	//Inicia Session PHP
	if(!session_start()) session_start();

	define( 'WWW_ROOT' , dirname( __FILE__ ) );
	define( 'DS' , DIRECTORY_SEPARATOR );

   	// define( 'ALGORITHM', 'HS512' );
	// define( 'SECRET_KEY','F5{3F0?j)CZG24M71l71&}D$4UTz{F' );
   	// define( 'TOKEN_ISSUER', 'http://aduvi.com.br' );
   	// define( 'TOKEN_AUDIENCE', 'http://aduvi.com.br' );

	//Configuraçao do RedBeans
 	// define( 'REDBEAN_MODEL_PREFIX', '\\Models\\' );

 	//Metodo do namespace
	// function __autoload($class) {
	// 	$class = WWW_ROOT . DS . str_replace('\\' , DS , $class . '.php' );

	// 	if (file_exists($class)) require_once($class);
	// }