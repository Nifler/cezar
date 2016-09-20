<?php
/**
 * Created by PhpStorm.
 * User: Nifler
 * Date: 12.08.2016
 * Time: 12:46
 */

function __autoload($class){
    if(file_exists("lib/$class.inc.php")) include_once("lib/$class.inc.php");
    else echo"Class $class is not exist";
}

require "conf.php";

include "core/Controller.php";

include "core/Model.php";

include "core/Route.php";

Route::start();