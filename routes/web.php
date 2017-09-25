<?php

class Mailer {

}

class RegisterUsers
{
    protected $mailer;
    private $foobar;

    function __construct(Mailer $mailer, $foobar)
    {
        $this->mailer = $mailer;
        $this->foobar = $foobar;
    }

    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

App::bind('foo', function(){
    return new RegisterUsers(new Mailer, 'foobar');
});

App::singleton('bar', function(){
    return new RegisterUsers(new Mailer, 'foobar');
});


// dump(app('foo'));
// dd(App::make('foo'));

// 不同的实例
$one = app('foo');
$two = app('foo');
var_dump($one, $two);

// 相同的实例
$four = app('bar');
$five = app('bar');
var_dump($four, $five);

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
Route::get('resolve', function() {
    dump(Request::all());
});

Route::get('begin', function() {
    // Session::flash('flash_message', 'your are signed in.');
    // Session::flash('flash_message_type', 'danger');
    
    // session()->flash('flash_message', 'wo are arriving at shangdi station');
    // session()->flash('flash_message_type', 'danger');
    
    flash('just one we will got you surprise', 'info');

    return redirect('/');
});

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
