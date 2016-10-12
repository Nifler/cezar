<?php
/**
 * Created by PhpStorm.
 * User: Nifler
 * Date: 12.08.2016
 * Time: 12:46
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

function __autoload($class){
    if(file_exists("lib/$class.inc.php")) include_once("lib/$class.inc.php");
    else echo"Class $class is not exist";
}

require "conf.php";

require "vendor/autoload.php";

include "core/Controller.php";

include "core/Model.php";

include "core/Route.php";

//Перенести в модель когда будет
/*
// RedBean PHP
R::setup('mysql:host='.DB_HOST.';
        dbname='.DB_NAME,DB_USER,DB_PASSWORD);
*/
Route::start();