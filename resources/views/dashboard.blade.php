





  @extends('master')

  @section('content')
  
  

  <div class="col-md-4 offset-md-4">
    <form method="post" action="/sendpost">
      @csrf
      <label>Post</label>
      <textarea class="form-control" placeholder="Enter Post" name="post">
      </textarea><br/>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>

@foreach($posts as $post)
  <div class="col-md-4 offset-md-4 post">
      <h4>{{$post->post}}</h4>
      <p>{{ $post->created_at->format('Y-m-d') }}</p>
      <button class="btn btn-danger"><a class="link" href="/delete/{{$post->id}}">Delete</a></button>&nbsp;
      <button class="btn btn-secondary"><a class="link" href="/edit/{{$post->id}}">Edit</a></button>
  </div>
@endforeach
  
    @endsection