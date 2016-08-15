<?php
/**
 * Created by PhpStorm.
 * User: Nifler
 * Date: 12.08.2016
 * Time: 12:43
 */

class Learn{
    private $str;
    public $resultOne;
    public $resultTwo;

    function __construct($text){
        $this->str=$text;
    }

    function oneFrequency(){
        $str=mb_strtolower($this->str);
        $arr=array();
        $i=0;
        while(isset($str[$i])){
            if (isset($arr[$str[$i]])){
                $arr[$str[$i]]++;
            }else{
                $arr[$str[$i]]=1;
            }
            $i++;
        }
        $this->resultOne=$arr;
    }

    function twoFrequency(){
        $str=mb_strtolower($this->str);
        $arr=array();
        $i=1;
        while(isset($str[$i])){
            if (isset($arr[$str[$i-1].$str[$i]])){
                $arr[$str[$i-1].$str[$i]]++;
            }else{
                $arr[$str[$i-1].$str[$i]]=1;
            }
            $i++;
        }
        print_r($arr);
    }
}