@extends('master')

@section('content')
<div class="col-md-4 offset-md-4">
    <form method="post" action="/savepost/{{$post->id}}">
      @csrf
      <label>Post</label>
      <textarea class="form-control" placeholder="Enter Post" name="post">
          {{$post->post}}
      </textarea><br/>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
@endsection