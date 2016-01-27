<?php
class Db extends medoo
{
	public static $instance;
	
	public static function getInstance() {
		if (!isset(self::$instance)) 
		{
			self::$instance = 	new self([
									'database_type' => 'mysql',
									'database_name' => 'notificador',
									'server' => 'localhost',
									'username' => 'root',
									'password' => '',
									'charset' => 'utf8',
								]);
		}
		return self::$instance;
	}
}
