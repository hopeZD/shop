<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Entity\Member;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/Login', function() {
   return view('Login');
});

Route::get('/Register');

Route::any('service/validate_code/create', 'Service\ValidateCodeController@create');

