<?php

require_once('../database/connection.php');

if($_GET['email'] == '' || empty($_GET['email'])){
	$retorno_dados_json['erro'] 	= 'Erro!';
	echo json_encode($retorno_dados_json);exit;
}

$retorno_dados_json['erro'] 	= 'N';
mysql_query("INSERT INTO email (email) VALUES ('". $_GET['email'] ."') ");	

echo json_encode($retorno_dados_json);
?>

<!-- CREATE DATABASE meualuno

CREATE TABLE email(
	id INT(11) NOT NULL AUTO_INCREMENT,
	email VARCHAR(60) NOT NULL,
	PRIMARY KEY(id)
); -->