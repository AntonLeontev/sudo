<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')->name('home');

Route::get('/lang/{lang}', function($lang) {
	session()->put('lang', $lang);

	return back();
})->name('language');

Route::view('/about', 'about')->name('about');
Route::view('/projects', 'projects')->name('projects');
Route::view('/publications', 'publications')->name('publications');
Route::view('/reviews', 'reviews')->name('reviews');
Route::view('/services', 'services')->name('services');
Route::view('/calculations', 'calculations')->name('calculations');
Route::view('/career', 'career')->name('career');
Route::view('/contacts', 'contacts')->name('contacts');
Route::view('/policy', 'policy')->name('policy');


