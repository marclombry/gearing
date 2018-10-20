<?php
namespace core\app\src\controller;
use core\app\src\model\Authentify;
use core\app\src\model\Profil;
use core\app\classes\Route;
use core\app\classes\FormFilter;
use core\app\classes\Form;
class ProfilController{
 //import connection in database
	

	public function showProfil($auth)
	{
		global $database;

		//si des donner son transmise en post, je decode le json et je transmet les donnée
		
		return $database->qry("SELECT profil.picture, profil.adresse, profil.cp, profil.city, profil.phone FROM profil 
			LEFT JOIN authentify
			ON authentify.id = profil.id_user WHERE authentify.id=$auth[id]
			",true);
		
		
	}

	public function updateProfil($post)
	{
		if(isset($_POST)){
			$post = FormFilter::input_filter($post);
			var_dump($post);
		}
		

	}
}