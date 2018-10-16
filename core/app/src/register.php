<?php
require_once('../../init.php');
use \core\app\src\model\Authentify;
use \core\app\src\controller\AuthentifyController;
use core\app\classes\Route;

if(isset($_SESSION['auth'])){header('location:gearing');}
AuthentifyController::Connexion();
if(isset($_GET['deco'])){
	AuthentifyController::Deconnexion();
}
if(isset($_POST) && !empty($_POST))
{
	AuthentifyController::Register();
}
require_once('view/login.view.php');
