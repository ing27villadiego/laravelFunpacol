<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: resource('zone','Zone\ZoneController');

Route:: resource('employee','Employee\EmployeeController');

Route:: resource('promoter','Promoter\PromoterController');

Route:: resource('adviser','Adviser\AdviserController');



Route:: resource('postmen','Postmen\PostmenController');


Route:: resource('godchildren','Godchildren\GodchildrenController');

Route:: resource('datafamily','Datafamily\DatafamilyController');


Route:: resource('godfather', 'Godfather\GodfatherController');


//rutas para todo sobre cartera

Route::resource('postmenPortfolio', 'Account\PostmenportfolioController');
Route::resource('collection', 'Account\CollectionController');

