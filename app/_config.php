<?php 
// https://fsymbols.com/text-art/


if($_SERVER['SERVER_NAME'] == 'localhost'){
//  █▀▄ █▀▀ █░█   █▀▀ █▄░█ █░█
//  █▄▀ ██▄ ▀▄▀   ██▄ █░▀█ ▀▄▀
//
	define('DBNAME', 'core');
	define('DBHOST', '130.61.104.80');
	define('DBUSER', 'root');
	define('DBPASS', 'greenmonster');
	
	define('ROOT', 'http://localhost:8089');

	define('APP_NAME_PREFIX', "DEV: ");
	define('DEBUG', true);/** true means show errors **/
}else{  
//  █▀█ █▀█ █▀█ █▀▄   █▀▀ █▄░█ █░█
//  █▀▀ █▀▄ █▄█ █▄▀   ██▄ █░▀█ ▀▄▀
//
	define('DBNAME', 'core');
	define('DBHOST', 'db-mariadb');
	define('DBUSER', 'app');
	define('DBPASS', 'hx3pqX123');

	define('ROOT', 'https://wacis.mg.blackmonkey.de');
	define('APP_NAME_PREFIX', "");

	define('DEBUG', false);/** true means show errors **/
}


define('APP_NAME', APP_NAME_PREFIX."My APP");
define('APP_DESC', "Best app on the planet");
define('APP_THEME', "coreui"); // base, inspinia, coreui


define('APP_META_description', APP_DESC);
define('APP_META_author', "Matthias Griesenbrock");
define('APP_META_keyword', "");
define('APP_META_title', APP_NAME." | #title#"); // #title# will be replaced by the page title


//
//	█▀▄ █▀█   █▄░█ █▀█ ▀█▀   ▀█▀ █▀█ █░█ █▀▀ █░█
//  █▄▀ █▄█   █░▀█ █▄█ ░█░   ░█░ █▄█ █▄█ █▄▄ █▀█
//
////////////////////////////////////////////////////////////
define('THEME_ASSETS', ROOT."/dist/".APP_THEME."/");
