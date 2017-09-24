@extends('app')

@section('content')
    <h1>{{ $card->title }}</h1>

    @if (count($card->notes))
        <ul class="list-group">
            @foreach($card->notes as $note)
            <li class="list-group-item">
                {{ $note->body }}
                <a href="/notes/{{ $note->id }}/edit" class="pull-right">{{ $note->user->name }}</a>
            </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-danger">empy card notes data</div>
    @endif

    <h3>Add new notes</h3>
    @include('cards.addnoteform');
@stop
