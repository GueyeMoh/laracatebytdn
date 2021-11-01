<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessageCreated;
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
// On dit que le route que s'appelle root_path appel la methode home de PageController
Route::get('/', [
	'as'=>'root_path',
	'uses'=>'PageController@home'
	]
);
Route::get('/about', [
	'as'=>'about_path',
	'uses'=>'PageController@about'
	]
);
Route::get('/contact', [
	'as'=>'contact_path',
	'uses'=>'ContactController@create'
	]
);
Route::post('/contact', [
	'as'=>'contact.store',
	'uses'=>'ContactController@store'
	]
);
Route::get('/test-email', function(){
	return new ContactMessageCreated('Gueye Mohamed', 'gueyemoda98@gmail.com', 'Dallal ak diam');
});

Auth::routes();


