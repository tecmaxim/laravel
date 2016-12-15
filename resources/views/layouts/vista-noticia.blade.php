<table class="table table-hover">
  @if(isset($noticias))
  <thead>
    <th>Title</th>
    <th>Description</th>
    <th>Img</th>
  </thead>
  <tbody>
      @foreach($noticias as $noticia)
      <tr>
          <td>{{ $noticia->title }}</td>
          <td>{{ $noticia->description }}</td>
          <td>
              <img src="imgNoticias/{{ $noticia->url_image }}" class="img-responsive" alt="" style="max-width: 100px;">
          </td>
          <td>
              <a href="noticias/{{ $noticia->id }}/edit" class="btn btn-danger btn-xs"> Edit</a>
              <form action="{{ route('noticias.destroy',$noticia->id) }}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  
                  <input type="submit" class="btn btn-warning btn-xs" value="Delete" />
              </form>
          </td>
          
      </tr>
      @endforeach
  </tbody>
  @endif
</table>

