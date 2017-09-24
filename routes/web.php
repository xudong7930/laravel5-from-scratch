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
    $people = [];
    // $people = ['Taylor', 'Matt', 'Jeffery'];
    // return view('welcome')->withPeople($people);
    // return view('welcome')->with(['people'=>$people]);
    // return view('welcome', ['people'=>$people]);
    return view('welcome', compact('people'));
});

Route::get('about', function(){
    // return 'about page.';
    return view('pages.about');
});

Route::get('pages', 'PagesController@home');
Route::get('pages/about', 'PagesController@about');


Route::get('cards', 'CardsController@index');
Route::post('cards', 'CardsController@store');
Route::post('cards/{card}/store', 'NotesController@store');

Route::get('cards/{card}', 'CardsController@show2');
Route::get('cards/show/{id}', 'CardsController@show');
Route::delete('cards/{card}', 'CardsController@destroy');

Route::get('notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');
