@extends('master')

@section('content')

@if(session()->has('success'))
    <li class="alert alert-success">{{session()->get('success')}}</li>
@endif
<form class="col-md-4 offset-md-4" method="post" action="/register">
    @csrf
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="name" placeholder="Enter username">
        
      </div>
      @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1"  name="email" placeholder="Enter email">
      
    </div>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Password">
    </div>
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    
    <button type="submit" class="btn btn-primary form-control">Submit</button>
  </form>

  @endsection