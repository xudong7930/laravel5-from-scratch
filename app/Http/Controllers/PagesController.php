<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $people = ['Taylor', 'Matt', 'Jeffery'];
        return view('welcome')->withPeople($people);
    }

    public function about()
    {
        // return 'about page.';
        return view('pages.about');
    }
}
