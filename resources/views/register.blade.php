@extends('master')

@section('content')
<div class="container custome-login">
   <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
         <h4>user registration</h4>
         <form action="/register" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">user name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="username">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Register</button>
          </form>
      </div>
   </div>
</div>

@endsection