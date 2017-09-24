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
