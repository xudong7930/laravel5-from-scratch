@extends('app')

@section('content')
    <h1>Edit Note</h1>
    <form action="/notes/{{ $note->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label>Body:</label>
            <textarea class="form-control" name="body">{{ $note->body }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Save Note</button>
        </div>
    </form>
@stop
