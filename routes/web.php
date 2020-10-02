<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PictureController;
use App\Http\Livewire\CatalogViewComponent;
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
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
	Route::get('/dashboard', function () { 
		return view('/dashboard');
	})->name('dashboard');
	
	
	Route::view('/picture', 'picture.dashboard')->name('picture');
	Route::view('/catalog', 'catalog.dashboard')->name('catalog');	
	//Route::view('/picture/view/{id}', 'view.dashboard')->name('view');
	Route::get('/picture/view/{id}', [PictureController::class, 'view']);
	Route::get('/catalog/view/{id}', CatalogViewComponent::class);
});
