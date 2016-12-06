<?php
//namespace model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Comment;

class User extends Model{

    protected $table = 'usersss';

    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function articles()
    {
        return $this->hasMany('Article');
    }

    public static function aaa($login){
        if (!self::where('login','=', $login)->first()){
            $user=new self();
            $user->login=$login;
            $user->password='78b64b21a2112e506a02055e7b216c47';
            $user->save();
            echo 'make';
        }else echo 'In base';
    }

    public static function testExistDb(){

        try{
            if(self::where('login','=', 'Nifler')->exist()){
                return 'Error exist';
            }
        }
        catch (Exception $e){
            return 'Table is not exist ';
        }

        return 'Table is exist';
    }
    
}
