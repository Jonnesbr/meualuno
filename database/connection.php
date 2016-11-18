<?php 
/////////////////////////////
//-- Tratando detalhes do PHP
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set('America/Sao_Paulo');
ini_set('session.use_cookies', '1');
ini_set('session.use_only_cookies', '1');
ini_set('session.use_trans_sid', '0');

$sql_url = '172.19.0.1:13306';
$sql_bas = 'meualuno';
$sql_usu = 'dev';
$sql_sen = 'dev';

if(!mysql_connect($sql_url, $sql_usu, $sql_sen))
	die('Sistema temporariamente indisponível!');

if(!mysql_select_db($sql_bas))
	die('Sistema temporariamente indisponível!');
	
mysql_set_charset('utf8');

?>

