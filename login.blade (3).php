 @extends('layouts.app')

@section('title','Login')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-5">
      <h3>Login</h3>
      <form method="POST" action="#">
        @csrf
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <button class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
@endsection

