@extends('layouts.app')

@section('content')

      <div class="container" style="margin-top:10%;">
        <div class="card" style="margin-top:5%;">
          <h5 class="card-header">Sign Up</h5>
          <div class="card-body">

            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('username') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Repeat Password</label>
                <div class="col-sm-10">
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat Password">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
                </div>
              </div>
            </form>

          </div>
        </div>
        <div class="footer-login">
          <center><small>Copyright &copy; by Lamosa Team</small></center>
        </div>
      </div>

@endsection
