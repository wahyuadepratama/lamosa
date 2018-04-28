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

                    @foreach($message as $message)
                    <div class="card">
                      <div class="card-header" id="headingOne" style="padding:0px;">
                        <h5 class="mb-0">
                          <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$message->id}}" aria-expanded="true">
                            ({{$message->message_type}})
                            @if($message->message_type=='Pengiriman')
                              'Anda telah berhasil mengirim pesan ke ' {{$message->junk_bank_id}}
                            @else
                              'Anda menerima balasan dari '.$message->junk_bank_id
                            @endif
                          </a>
                        </h5>
                      </div>

                      <div id="{{$message->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <table>
                            <tr>
                              <td><span class="font-profile">Jenis Sampah</span></td>
                              <td>:</td>
                              <td>{{$message->junk_name}}</td>
                            </tr>
                            <tr>
                              <td><span class="font-profile">Berat Sampah</span></td>
                                <td>:</td>
                                <td>{{$message->berat}}</td>
                            </tr>

                            <tr>
                              <td><span class="font-profile">Keterangan Lain</span></td>
                                <td>:</td>
                                <td>{{$message->message}}</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    @endforeach

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
