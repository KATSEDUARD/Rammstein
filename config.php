<?php
    define("HOST", "127.0.0.1");
	define("USER", "host113");
	define("PASSWORD", "4L8exXaacJY=");
	define("DB", "itelit_host113");
	
	$db = mysql_connect(HOST, USER, PASSWORD);
	
	if(!$db){
		exit("Connection to database failed - ".mysql_error());
	}
	if(!mysql_select_db(DB,$db)){
		exit("Database selection error - ".mysql_error());
    }
	mysql_query("SET NAMES 'utf8'");
?>