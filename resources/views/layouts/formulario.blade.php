<form method="post" role="form" action="{{ url('noticias')}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" placeholder="description">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="title">
        @if($errors->has('title'))
            <span style='color:red'> {{ $errors->first('title')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>