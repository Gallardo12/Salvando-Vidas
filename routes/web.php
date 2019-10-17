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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/phtls', function () {
    return view('phtls');
});
Route::get('/generales', function () {
    return view('generales');
});
Route::get('/proyectos', function () {
    return view('proyectos');
});
Route::get('/tums', function () {
    return view('tums');
});
Route::get('/urgencias-medicas', function () {
    return view('urgencias');
});
Route::get('/sexto', function () {
    return view('sexto');
});
Route::get('/mdfpp', function () {
    return view('mdfpp');
});
