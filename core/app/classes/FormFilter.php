<?php
namespace core\app\classes;
class FormFilter{
	
	public static function input_filter($post)
	{
		return !empty($post)? array_map("self::secure_input", $post):null;
	}

	public static function secure_input($data)
	{
		$data = addcslashes($data, '%');
		$data = htmlspecialchars($data);
		return !empty($data) && !intval($data)? htmlspecialchars($data):intval($data);
	}

	public static function secure_input_length($input, $min=6, $max =255)
	{
		return strlen($input) >=$min && strlen($input) <=$max;
	}

	public static function secure_email($email)
	{
		return filter_var($email,FILTER_VALIDATE_EMAIL);
	}
}