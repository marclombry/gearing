<?php
require_once('../../init.php');
use \core\app\src\model\Authentify;
use \core\app\src\model\profil;
use \core\app\src\controller\AuthentifyController;
use \core\app\src\controller\ProfilController;
use core\app\classes\Route;
use core\app\classes\Form;
require_once('../public/js/profiladd.js');
$titleH1 ='Bienvenur sur votre profil';
$describe ='';
$auth = new Authentify();
$auth->connexion();
$user = $auth->connexion();
$profil = new ProfilController();
$user_info = $profil->showProfil($user);
require_once('view/profil.view.php');
