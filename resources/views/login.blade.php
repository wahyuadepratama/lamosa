@extends('layouts.app')

@section('content')

      <div class="container">
          <div class="grid-login">
            <div class="login-box">
              <h3 style="font-weight:normal">Please Sign In</h3>
              <center>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                  <input type="submit" class="btn btn-success form-control" aria-describedby="basic-addon1">
                </div>
                <p>
                  Belum memiliki akun? Silahkan daftar disini <a href="sign-up.php">sign up</a>
                </p>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn login-sosmed"><img src="img/google.svg" alt="" width="20"/> &nbsp; Google</button>
                  <!-- <button type="button" class="btn btn-secondary">Middle</button> -->
                  <button type="button" class="btn login-sosmed"><img src="img/facebook.svg" alt="" width="20"/> &nbsp; Facebook</button>
                </div>
              </center>
            </div>
          </div>
        <div class="footer-login">
          <center><small>Copyright &copy; by Lamosa Team</small></center>
        </div>
      </div>
@endsection
