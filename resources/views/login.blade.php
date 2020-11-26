





  @extends('master')

@section('content')

<form class="col-4 offset-md-4" method="post" action="{{route('loginpage')}}">
   @csrf
    
    <div class="form-group ">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
    </div> 
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection