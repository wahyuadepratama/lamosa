@extends('layouts.app')

@section('content')

  <!-- @include('layouts.header') -->

  @include('layouts.slider')
  <style media="screen">
    body{
      background-color: white;
    }
  </style>
  <div class="container" style="background-color:white;margin-top:0px;" id="startchange">
    <div class="grid" style="padding: 50px 0px 20px 0px">
      <div class="content-0">
        <center>
        <h4 style="font-weight:bold;color:green">Tentang Lamosa</h4>
      </center>
      </div>
      <div class="content-1">

            <div class="pict" style="background-image:url('img/penyebaran.jpg');">
                <img src="" alt="" />
            </div>
            <div class="desc">
              <h4 style="color:green;font-weight:bold">Lokasi Penyebaran Sampah</h4>
                Fitur untuk melaporkan lokasi-lokasi sampah yang dibuang tidak pada tempatnya untuk di tindaklanjuti. Laporkan lokasi-lokasi sampah yang ada agar lingkungan tetap terjaga kebersihannya.
            </div>

      </div>
      <div class="content-2">
            <div class="pict" style="background-image:url('img/tpa.jpg');">

            </div>
            <div class="desc">
              <h4 style="color:green;font-weight:bold">Tempat Pembuangan Akhir</h4>
                Temukan TPA Sampah terdekat dari lokasi anda dan buanglah sampah anda dengan benar.
            </div>

      </div>
      <div class="content-3">

            <div class="pict" style="background-image:url('img/sampah-bekas-2.jpg');">

            </div>
            <div class="desc">
              <h4 style="color:green;font-weight:bold">Bank Sampah</h3>
                Temukan lokasi bank sampah yang ada disekitar dan jadikan sampah yang anda miliki berharga untuk dijual dan buatlah dunia ini lebih indah tanpa pencemaran.
            </div>

      </div>
    </div>
  </div>
    @include('layouts.footer')
@endsection
