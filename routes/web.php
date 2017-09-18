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

/*
|--------------------------------------------------------------------------
| Index Route
|--------------------------------------------------------------------------
*/


Route::get('/', 'FrontController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Simple Routes for Showcase Site
|--------------------------------------------------------------------------
|
| All the Routes to the pages of the Showcase Site not requiring logic 
| with the Controllers
|
*/


// ADN Page
Route::get('/adn', function () {
	return view('front.adn');
})->name('adn');


// Realisation Page
Route::get('/realisation', function () {
	return view('front.realisation');
})->name('realisation');


// Projet Page
Route::get('/projet', function () {
	return view('front.projet');
})->name('projet');


// Expertise Page
Route::get('/expertise', function () {
	return view('front.expertise');
})->name('expertise');


// Collaboration Page
Route::get('/collaboration', function () {
	return view('front.collaboration');
})->name('collaboration');




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


Route::get('dashboard/projects', 'Backend\ProjectController@index')->name('projects_home');

Route::post('dashboard/projects', 'Backend\ProjectController@store')->name('projects_store');

Route::get('dashboard/projects/view/{id}', 'Backend\ProjectController@show')->name('projects_sheet');

Route::get('dashboard/projects/edit/{id}', 'Backend\ProjectController@edit')->name('projects_edit');

Route::get('dashboard/projects/create', 'Backend\ProjectController@create')->name('projects_create');

Route::get('dashboard/posts', 'Backend\PostController@index')->name('posts_home');

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

