@extends('layouts.app')

@section('content')

      <div class="container">
        <div class="card" style="margin-top:5%;">
          <h5 class="card-header">Sign Up</h5>
          <div class="card-body">

            <form method="POST">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Repeat Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" placeholder="Repeat Password">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pengguna</label>
                <div class="col-sm-10">
                  <div class="form-group">
                    <select name="role" class="form-control" id="role">
                      <option value="4">Pilih</option>
                      <option value="4">Warga</option>
                      <option value="3">Pengelola Bank Sampah</option>
                    </select>
                  </div>
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
