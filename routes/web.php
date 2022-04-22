<?php

use App\Mail\ContactaMail;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactaController;
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
    return view('welcome2');
});
Auth::routes();

Route::group(['middleware' => ['can:admin']], function () {
    Route::get('admin/list_users', [\App\Http\Controllers\Admin\AdminController::class, 'list_users']);
    Route::get('admin/list_series', [\App\Http\Controllers\Admin\AdminController::class, 'list_series']);
    Route::get('admin/list_films', [\App\Http\Controllers\Admin\AdminController::class, 'list_films']);
    Route::get('admin/list_docus', [\App\Http\Controllers\Admin\AdminController::class, 'list_docus']);
    Route::resource('admin', \App\Http\Controllers\Admin\SeriesController::class);

});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('freeseries', [\App\Http\Controllers\HomeController::class, 'freeseries']);
Route::get('peliculas', [\App\Http\Controllers\HomeController::class, 'peliculas']);
Route::get('docus', [\App\Http\Controllers\HomeController::class, 'docus']);
Route::get('contacta', [ContactaController::class, 'index'])->name('contacta.index');
Route::post('contacta', [ContactaController::class, 'store'])->name('contacta.store');

/*Route::get('contacta', function () {
    $correo = new ContactaMail;
    Mail::to('toorasturian@gmail.com')->send($correo);
    return ('Mensaje Enviado');
});*/
