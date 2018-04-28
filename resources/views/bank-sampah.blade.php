@extends('layouts.app')

@section('content')


      <div class="container" style="padding-top:30px;">
        <div class="grid-bank-sampah-0">
          <div class="list_sampah">

            @foreach($bank as $bank)
            <div class="box-list">
              <div class="card" style="width: auto">
                <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$bank->name}}</h5>
                  <p class="card-text">{{$bank->description}}</p>
                  <div class="grid-button">
                    <div class="btn-01">
                      <a href="/lokasi/{{$bank->id}}" class="btn btn-primary">Lihat Lokasi</a>
                    </div>
                    <div class="btn-02">
                      <a href="/transaksi/{{$bank->id}}" class="btn btn-success">Beli/Jual</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
          <div class="jenis_sampah">
            <div class="panel">
              <div class="panel-header">
                <span>Jenis Sampah untuk Transaksi di Bank Sampah</span>
              </div>
              <div class="panel-body-bank">
                <div class="box-content">
                  <div class="foto" style="background-image:url('')">
                    foto
                  </div>
                  <div class="detail-desk">
                    <small>Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                  </div>
                </div>
                <div class="box-content">
                  <div class="foto">
                    foto
                  </div>
                  <div class="detail-desk">
                    <small>heeyy</small>
                  </div>
                </div>
                <div class="box-content">
                  <div class="foto">
                    foto
                  </div>
                  <div class="detail-desk">
                    <small>heeyy</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <!-- END GRID LOCATION -->
      </div>
        <!-- END CONTAINER -->
          @include('layouts.footer')

@endsection
