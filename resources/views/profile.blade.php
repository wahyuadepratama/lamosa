@extends('layouts.app')

@section('content')


      <div class="container" style="padding-top:30px;">
          <div class="grid-profile">
            <div class="data-profile">
              <div class="panel">
                <div class="panel-header">Data Profile</div>
                <div class="panel-body-profile">
                  <div class="profile-pict"></div>
                    <center>
                      <small>@wahyuadele04</small>
                      <p>wahyuadepratam4@gmail.com</p>
                      <span class="badge badge-info" style="padding:10px;font-size:2em.">Warga</span>
                    </center>
                </div>
              </div>

            </div>
            <div class="notif-transaksi">
              <div class="panel">
                <div class="panel-header">Notifikasi Transaksi</div>
                <div class="panel-body-profile">
                  <div class="accordion" id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne" style="padding:0px;">
                        <h5 class="mb-0">
                          <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            (Balasan) Permintaan penjualan sampah dari bank A
                          </a>
                        </h5>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <table>
                            <tr>
                              <td><span class="font-profile">Jenis Sampah</span></td>
                              <td>:</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td><span class="font-profile">Berat Sampah</span></td>
                                <td>:</td>
                                <td></td>
                            </tr>

                            <tr>
                              <td><span class="font-profile">Keterangan Lain</span></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo" style="padding:0px;">
                        <h5 class="mb-0">
                          <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            (Pengiriman) Permintaan penjualan sampah dari bank A
                          </a>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          <table>
                            <tr>
                              <td><span class="font-profile">Jenis Sampah</span></td>
                              <td>:</td>
                              <td></td>
                            </tr>
                            <tr>
                              <td><span class="font-profile">Berat Sampah</span></td>
                                <td>:</td>
                                <td></td>
                            </tr>

                            <tr>
                              <td><span class="font-profile">Keterangan Lain</span></td>
                                <td>:</td>
                                <td></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-profile">
            <center>
            <small>Copyright &copy; by Lamosa Team</small>
            </center>
          </div>
      </div>
        <!-- END CONTAINER -->


@endsection
