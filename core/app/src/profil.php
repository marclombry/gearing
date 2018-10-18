<?php
require_once('../../init.php');
use \core\app\src\model\Authentify;
use \core\app\src\controller\AuthentifyController;
use core\app\classes\Route;
$auth = new Authentify();
$auth->connexion();
$user = $auth->connexion();
require_once('view/profil.view.php');
