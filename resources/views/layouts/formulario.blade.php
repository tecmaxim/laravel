@if(session()->has('msj'))
    <div class="alert alert-danger" role="alert">{{ session('msj') }}</div
@endif

<form method="post" role="form" action="{{ isset($noticia) ?  route("noticias.update", $noticia->id) : url('noticias')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" placeholder="description" value= "{{ isset($noticia) ? $noticia->description : ""}}">
        @if($errors->has('description'))
            <span style='color:red'> {{ $errors->first('description')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="title" value="{{ isset($noticia) ? $noticia->title : ""}}">
        @if($errors->has('title'))
            <span style='color:red'> {{ $errors->first('title')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="url_image">Image</label>
            <input type="file" class="form-control-file" name="url_image" aria-describedby="fileHelp">
        @if(isset($noticia))
        <input type="text" class="form-control-file" name="previous_image" value="{{ $noticia->url_image }}">
        @endif
        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>