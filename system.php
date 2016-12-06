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
    if(file_exists("module/$class.php")) include_once("module/$class.php");
}


require "conf.php";

require "vendor/autoload.php";

include "core/Controller.php";

include "core/Model.php";

include "core/Route.php";

//Перенести в модель когда будет

// Подключения бд
use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Configure the database and boot Eloquent
 */
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'    => ''
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
// set timezone for timestamps etc
date_default_timezone_set('UTC');
//перенести в модель когда будеТ


Route::start();
// bad include models
include('model/User.php');
include('model/Comment.php');
include('model/Article.php');