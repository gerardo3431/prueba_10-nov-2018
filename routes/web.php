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


Route::get('/admin/show', function(){
	return response()->json([
		'tipo' => 'aqui se muestran datos'
	]);
});

Route::get('/admin/create', function(){
	return response()->json([
		'tipo' => 'aqui se crean datos'
	]);
});

Route::get('/admin/edit', function(){
	return response()->json([
		'tipo' => 'aqui se editan datos'
	]);
});

Route::get('/admin/delete', function(){
	return response()->json([
		'tipo' => 'aqui se eliminan datos'
	]);
});

