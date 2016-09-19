<?php
/**
 * Created by PhpStorm.
 * User: Nifler
 * Date: 11.08.2016
 * Time: 11:24
 */

Class Model{
    private $host;
    private $name;
    private $user;
    private $password;

    function __construct(){
        $this->host=DB_HOST;
        $this->name=DB_NAME;
        $this->user=DB_USER;
        $this->password=DB_PASSWORD;

        echo $this->name;
    }

}