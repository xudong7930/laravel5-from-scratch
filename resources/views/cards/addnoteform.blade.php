<form action="/cards/{{ $card->id }}/store" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Body:</label>
        <textarea class="form-control" name="body">{{ old('body') }}</textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Add</button>
    </div>
</form>

@if (count($errors))
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif
