<?php
namespace core\app\src\controller;
use core\app\src\model\Authentify;
use core\app\classes\Route;
use core\app\classes\FormFilter;
class AuthentifyController{

	public static function index()
	{
		Route::Url('/gearing');
	}

	public static function Connexion()
	{
		if(isset($_POST)){
			// sécure all variable post
			$_POST = array_map('htmlspecialchars', $_POST);
			//import connection in database
			global $database;
			// secure variable
			$pseudo = isset($_POST['pseudo'])? htmlspecialchars($_POST['pseudo']):'';
			$email = isset($_POST['email'])? htmlspecialchars($_POST['email']):'';
			$password = isset($_POST['password'])? htmlspecialchars($_POST['password']) :''; 
			$secret = isset($_POST['secret'])? htmlspecialchars($_POST['secret']):'';
			// drop a password in authentify table
			$verifPass = $database->select("SELECT password FROM authentify WHERE pseudo = '$pseudo'",true);
			//verify the password in database
			$passVerif = $verifPass ? password_verify($password,$verifPass->password):false;
			// if it's a good password so i start request for recover informations
			if($passVerif){
				$check = $database->select("SELECT id, pseudo, email, password, secret, token, administator FROM authentify WHERE pseudo = '$pseudo' AND email = '$email' AND secret = '$secret' ",true);
			}
			
			//if there is a request and is a good request, i instance new Authentify class
			if(isset($check) && !empty($_POST['pseudo'])){
				$error='';
				$auth = new Authentify();
				$auth->hydrate($check);
				$auth->connexion();
				Route::Url('/gearing');

			
			}
		

		}
		
	}

	public static function Deconnexion(){
		session_destroy();
		Route::Url('/gearing');
	}

	public static function Register(){
		if(isset($_POST) && !empty($_POST)){
			global $database;
			
			$confirm= !empty($_POST)?FormFilter::input_filter($_POST):false;
			$confirmPseudo = !empty($_POST['pseudo'])?FormFilter::secure_input_length($_POST['pseudo'], $min=6, $max =255):false;
			$confirmEmail = !empty($_POST['email'])?FormFilter::secure_email($_POST['email']):false;
			$confirmPassword = !empty($_POST['password'])?FormFilter::secure_input_length($_POST['password'], $min=6, $max =255):false;
			$confirmSecret= !empty($_POST['secret'])?FormFilter::secure_input_length($_POST['secret'], $min=6, $max =255):false;

			if($confirmPseudo ===false || $confirmEmail ===false|| $confirmPassword ===false|| $confirmSecret ===false)
			{
				echo " une érreur est survenue veuillez recommencer";
				//$_SESSION['error'] =" une érreur est survenue veuillez recommencer";
				Route::Url('/gearing');
				//$_SESSION['error'];
			}
			$srt = htmlentities($_POST['pseudo'].','.$_POST['email'].','.password_hash($_POST['password'],PASSWORD_DEFAULT).','.$_POST['secret']);
			$insert = $database->inst('authentify',
				'pseudo,email,password,secret',
				':pseudo,:email,:password,:secret',
				$srt
			);
			echo "Vous ete inscrit";
			//$_SESSION['message']['register']='Vous voici inscrit';
			Route::Url('/gearing');
		}
		
	}
}