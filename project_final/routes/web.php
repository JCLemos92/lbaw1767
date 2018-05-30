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
/*NOSSAS ROTAS*/

//Static Pages
Route::get('/index', 'StaticController@index');
Route::get('/about', 'StaticController@about');
Route::get('/faq', 'StaticController@faq');
Route::get('/contact', 'StaticController@contact');

//Route::post('/project', 'StaticController@search')->name('search');
//Route::get('/project', 'StaticController@project');

Route::get('/project', 'StaticController@publicProject');
Route::get('/project{id}', 'StaticController@viewProject');
Route::post('/project', 'StaticController@searchProject');



//Auth
/*
Route::get('/signin', 'SigninController@signin');
Route::get('/register', 'TestController@testsget');*/

//Users Statics Pages
Route::get('/aut_index', 'AuthStaticController@index')->middleware('auth');
Route::get('/aut_about', 'AuthStaticController@about')->middleware('auth');
Route::get('/aut_faq', 'AuthStaticController@faq')->middleware('auth');
Route::get('/aut_contact', 'AuthStaticController@contact')->middleware('auth');
Route::get('/aut_contact', 'AuthStaticController@contact')->middleware('auth');
Route::get('/aut_projects', 'AuthProjectController@project')->middleware('auth');

Route::get('/new_project', 'AuthProjectController@newproject')->middleware('auth');
Route::get('/my_projects', 'AuthProjectController@myprojects')->middleware('auth');

/*
Route::get('/aut_projects', 'AuthStaticController@project')->middleware('auth');
Route::get('/aut_projects{id}', 'AuthStaticController@viewProject')->middleware('auth');
Route::post('/aut_projects{id}', 'AuthStaticController@projPostHandler')->middleware('auth');
Route::post('/aut_invite{id}', 'AuthStaticController@searchContrib')->middleware('auth');
Route::get('/aut_projectsprivate', 'AuthStaticController@privateproject')->middleware('auth');
Route::get('/aut_myprojects', 'AuthStaticController@myProject')->middleware('auth');
Route::post('/aut_projects', 'AuthStaticController@createProject')->middleware('auth');
Route::post('/aut_createTask{id}', 'AuthStaticController@createTask')->middleware('auth');
Route::post('/aut_projectsprivate', 'AuthStaticController@createProject')->middleware('auth');*/


/*TEST PAGE*/
Route::get('/testprint', 'TestController@testsprint');
Route::get('/testget', 'TestController@testsget');
Route::resource('/', 'TestController');


/*Authentication*/
Route::auth();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('pwreset', 'Auth\PasswordController@showResetForm')->name('reset')->middleware('auth');
Route::post('pwreset', 'Auth\PasswordController@reset');

Route::get('pwforget', 'Auth\ForgetPasswordController@showForgetForm')->name('forget');
Route::post('pwforget', 'Auth\ForgetPasswordController@forget');

Route::get('editprofile', 'ProfileController@showEditForm')->name('edit')->middleware('auth');
Route::post('editprofile', 'ProfileController@edit');

Route::get('send_email', 'Auth\ForgetPasswordController@sendEmail');
