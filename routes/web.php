<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CountryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteCountryProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/booking', [HomeController::class, 'booking']);
Route::get('/tracking', [HomeController::class, 'tracking']);


Auth::routes();

Route::group(['middleware' => ['auth','isAdmin','verified']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
 
    // Countrys Routes
    Route::get('/countries', [CountryController::class, 'index']);
    Route::get('/add-country', [CountryController::class, 'addCountry']);
    Route::post('/save-country', [CountryController::class, 'saveCountry']);
    Route::get('/edit-country/{id}', [CountryController::class, 'editCountry']);
    Route::post('/update-country/{id}', [CountryController::class, 'updateCountry']);
    Route::get('/delete-country/{id}', [CountryController::class, 'deleteCountry']);
    // Route::get('/country-active/{id}', [CountryController::class, 'active']);
    // Route::get('/country-deactive/{id}', [CountryController::class, 'deactive']);


    // Route::get('/services', [CountryController::class, 'index']);
    // Route::get('/add-service', [CountryController::class, 'addService']);
    // Route::post('/save-service', [CountryController::class, 'saveService']);
    // Route::get('/edit-service/{id}', [CountryController::class, 'editService']);
    // Route::post('/update-service/{id}', [CountryController::class, 'updateService']);
    // Route::get('/delete-service/{id}', [CountryController::class, 'deleteService']);
    // Route::get('/service-active/{id}', [CountryController::class, 'active']);
    // Route::get('/service-deactive/{id}', [CountryController::class, 'deactive']);
 
 });