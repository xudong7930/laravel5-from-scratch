@extends('app')

@section('content')
    <h1>All Cards</h1>
    @foreach($cards as $card)
    <ul class="list-group">
        <li class="list-group-item">
            <a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
        <li>
    </ul>
    @endforeach

    <h1>ADD NEW CARD</h1>
    @include('cards.addcardform');
@stop
