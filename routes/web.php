<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

/*
| Remove the ability to register
| The users can't access to this route
| Redirection to Login page instead
*/
Route::get('/register', function(){
    return redirect()->route('login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->resource('companies', 'CompaniesController');
Route::middleware(['auth'])->resource('employees', 'EmployeesController')->except([
    'index', 'show'
]);

Route::get('lang/{locale}', 'HomeController@lang');