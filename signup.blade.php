@extends('layouts.app')

@section('title','Signup')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h3>Signup</h3>
      <form method="POST" action="#">
        @csrf
        <div class="mb-3"><label class="form-label">User ID</label><input class="form-control" name="userid"></div>
        <div class="mb-3"><label class="form-label">Fullname</label><input class="form-control" name="fullname"></div>
        <div class="mb-3"><label class="form-label">Username</label><input class="form-control" name="username"></div>
        <div class="mb-3"><label class="form-label">Password</label><input type="password" class="form-control" name="password"></div>
        <div class="mb-3"><label class="form-label">Confirm Password</label><input type="password" class="form-control" name="password_confirmation"></div>
        <button class="btn btn-success">Register</button>
      </form>
    </div>
  </div>
@endsection

