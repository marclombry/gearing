<?php
namespace core\app\src\controller;
use core\app\src\model\Authentify;
use core\app\src\model\Profil;
use core\app\classes\Route;
use core\app\classes\FormFilter;
class ProfilController{
 //import connection in database
	

	public function showProfil($auth)
	{
		global $database;
		
		return $database->qry("SELECT profil.picture, profil.adresse, profil.cp, profil.city, profil.phone FROM profil 
			LEFT JOIN authentify
			ON authentify.id = profil.id_user WHERE authentify.id=$auth[id]
			",true);
		
		
	}
}