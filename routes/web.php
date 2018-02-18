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

    $books = DB::table('books')->paginate(10);


   return View('layouts.master', compact('books'));
});

Route::get('books/{books}', function($id){

    $x = DB::table('books')->find($id);

   // dd($book);
    return View('book', compact('x'));
});


Route::post('/', 'OffersController@store');


Route::get('/offers', function () {

    $offers = DB::table('offers')->get();

    return View('offers', compact('offers'));
});