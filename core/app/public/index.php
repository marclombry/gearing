<?php
require_once "../../../core/init.php";
use \core\app\classes\Form;
use \core\app\classes\FormFilter;
use \core\app\classes\Html;
use \core\app\classes\Route;
use \core\app\classes\MySession;
var_dump(MySession::Verif_session());
echo Form::input("text","f");