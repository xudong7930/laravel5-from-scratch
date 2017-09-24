<form action="/cards" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" calss="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Add</button>
    </div>
</form>
