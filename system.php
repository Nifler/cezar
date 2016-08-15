<?php
/**
 * Created by PhpStorm.
 * User: Nifler
 * Date: 12.08.2016
 * Time: 12:46
 */

function __autoload($class){
    include_once("lib/$class.inc.php");
}