<?php
class AdminController{


	public static function create($post){
		global $database;
		if(isset($_POST)){
			$_POST = array_map('htmlspecialchars',$_POST);
		

		}
	}

	public static function delete($id){
		global $database;
		if(isset($_GET['id'])){
			$id = htmlspecialchars($_GET['id']);
		
		}
		
	}



}
