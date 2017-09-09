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

Route::get('/', 'FrontController@index')->name('home');


// On change la locale
Route::get('/locale/{lang}', function($lang){

	session(['lang' => $lang]); // persister le changement de la langue

	app()->setLocale($lang);

	return redirect()->back();

})->name('locale');




Auth::routes();

//LOGOUT
Route::get('logout', function(){
	Auth::logout();

	return redirect()->route('home')->with('message', 'Vous êtes déconencté');
})->name('logout_dashboard');


Route::get('dashboard/projects', 'Backend\DashController@projects')->name('projects_home');


Route::resource('dashboard', 'Backend\DashController', [
	'middleware' => 'auth'
]);

// Route::prefix('admin')->group(
// 	function(){
// 		Route::resource('dashboard', 'Backend\DashController', 
// 		[
// 				'middleware' => ['auth'],
// 				'names' => [
// 					'index' =>'dashboard'
// 				]
// 		]);
// 	}
// );

