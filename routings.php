<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 20.09.16
 * Time: 11:46
 */
//NOT WORKING



Route::get('test', ['as' => 'test', 'uses' => 'TestController@index']);

Route::post('test', ['as' => 'test', 'uses' => 'TestController@index']);

Route::put('test', ['as' => 'test', 'uses' => 'TestController@index']);

Route::delete('test', ['as' => 'test', 'uses' => 'TestController@index']);