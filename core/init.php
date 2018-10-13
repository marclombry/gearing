<?php
session_start();
require "../../../vendor/autoload.php";
$config = require "../../../core/app/database/config.php";
require "../../../core/app/database/db.php";
$database = DB::getInstance();
use \core\app\classes\Form;
use \core\app\classes\FormFilter;
use \core\app\classes\Html;
use \core\app\classes\Route;
use \core\app\classes\MySession;
echo Form::input("text","f");
var_dump(MySession::showSession());
var_dump($_SESSION);
