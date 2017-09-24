<?php

namespace App\Http\Controllers;

use App\Card;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    public function index()
    {
        $users = User::pluck('id', 'email');

        // $cards = DB::table('cards')->get();
        $cards = Card::all();
        return view('cards.index', compact('cards', 'users'));
    }

    public function show($id)
    {
        // return $id;
        
        $card = Card::find($id);

        // return $card;
        return view('cards.show', compact('card'));
    }

    public function show2(Card $card)
    {
        // eager load
        // $card1 = Card::with('notes.user')->get();
        // return $card1;

        $card->load('notes.user'); // eager load.
        // return $card;
        return view('cards.show', compact('card'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Card::create([
            'title' => $input['title']
        ]);
        
        return back();
    }
}
