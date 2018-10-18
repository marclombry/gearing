<?php
require_once('../../init.php');
use \core\app\src\model\Authentify;
use \core\app\src\model\profil;
use \core\app\src\controller\AuthentifyController;
use \core\app\src\controller\ProfilController;
use core\app\classes\Route;
$auth = new Authentify();
$auth->connexion();
$user = $auth->connexion();
$profil = new ProfilController();
var_dump($profil->showProfil($user));
require_once('view/profil.view.php');
