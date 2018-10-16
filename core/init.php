<?php
session_start();
require "../../../vendor/autoload.php";
$config = require "../../../core/app/database/config.php";
require "../../../core/app/database/db.php";
require_once 'functions/functionGeneral.php';
$titleH1 = 'Bienvenue';
$describe = 'Gearing framework';
$titleApp = isset($_SERVER['REQUEST_URI'])? strtoupper(str_replace('/','',$_SERVER['REQUEST_URI'])): "gear";
$database = DB::getInstance();


