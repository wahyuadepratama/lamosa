@extends('layouts.app')

@section('content')

      <div class="container" style="margin-top:120px;">
        <div class="grid-sign-up">
          <div class="prekata">
            <div class="panel-prekata">
              <h2>Ayo Gabung!</h2>
              <p>Mari bantu mewujudkan lingkungan yang bersih bersama Lamosa</p>
              <p>
                <div class="grid-prekata">
                  <span class="icon" style="font-size:3em;"><i class="fas fa-check-circle"></i></span><span style="font-size:1.5" class="kata-satu"> Tandai dan laporkan lokasi keberadaan tumpukan sampah</span>

                <br>
                <span class="icon2" style="font-size:3em;"><i class="fas fa-check-circle"></i></i></span><span class="kata-dua"> Temukan bank sampah terdekat</span><br>
                <span class="icon3" style="font-size:3em;"><i class="fas fa-check-circle"></i></i></span><span class="kata-tiga"> Temukan TPA terdekat</span>
              </div>
            </p>
            <center><small>Copyright &copy; by Lamosa Team</small>
            </div>

          </div>
          <div class="sign-up-panel">
            <div class="panel-sign-up">
              <div class="panel-header-sign-up">
                <h4 style="padding:0px;">Sign Up</h4>
              </div>
              <div class="panel-body-sign-up">
                <form method="POST">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Repeat Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" placeholder="Repeat Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Pengguna</label>
                    <div class="col-sm-8">
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
                    <label class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-8">
                      <button type="submit" name="submit" class="btn btn-success" style="background-color:#008000;border-radius:0px">Sign Up</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>


      </div>

@endsection
