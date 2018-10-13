<?php
namespace core\app\classes;
class MySession {
	
	public static function showSession()
	{
		return (isset($_SESSION) && !empty($_SESSION));
	}
}
