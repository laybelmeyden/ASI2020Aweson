<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);

Route::get('/contact', [MainController::class, 'contact']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/newws', [MainController::class, 'newws']);

Route::get('/project', [MainController::class, 'project']);

Route::get('/new{solo}', [MainController::class, 'newsolo']);

Route::get('/project{solo}', [MainController::class, 'projectsolo']);

Route::post('/contacts', [MainController::class, 'contacts']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
