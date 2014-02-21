<?php

class MySQLConnect {

	public static function getMySQLConnection() {		
		$iniFile = ROOT_PATH . 'backend/config/configDB.ini';

		$data = parse_ini_file($iniFile, true);

		$db_host = $data['DBConfig']['db_host'];
		$dbuser = $data['DBConfig']['dbuser'];
		$dbpassword = $data['DBConfig']['dbpassword'];  
		$dbname = $data['DBConfig']['dbname'];
		
		@$db = mysql_connect($dbhost, $dbuser, $dbpassword);
		//@$db = mysql_pconnect($dbhost, $dbuser, $dbpassword);
		if (!$db){
			return null;
		}
		return $dbname;
		
	}
	
}