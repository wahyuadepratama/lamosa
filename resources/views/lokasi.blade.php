@extends('layouts.app')

@section('content')
      <link rel="stylesheet" href="{{URL::asset('js/routing/dist/leaflet-routing-machine.js')}}" />
      <link rel="stylesheet" href="{{URL::asset('js/routing/dist/leaflet-routing-machine.css')}}" />

      <script>
        var argeojson= <?php echo json_encode($location) ?>;
        var argeojsonbank=<?php echo json_encode($bank) ?>;
      </script>
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="crossorigin=""/>
      <!-- Make sure you put this AFTER Leaflet's CSS -->
      <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="crossorigin=""></script>

      <div class="container" style="padding-top:30px;">
        <div class="grid-location">
          <div class="contentku" id="mapid">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><div ></div></div>
              <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list"></div>
              <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Profile</div>
              <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">message</div>

            </div>
          </div>
          <div class="sidebarku">
            <div class="accordion" id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-sidebar dropdown-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Tampilkan Lokasi
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <div class="list-group" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings" onclick="gpsLokasi()">Posisi Saya</a>
                      <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" role="tab" aria-controls="home" onclick="lokasiSampah()">Lokasi Sampah</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" role="tab" aria-controls="profile" onclick="lokasitpa()">Lokasi TPA</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"  role="tab" aria-controls="messages" onclick="lokasibanksampah()">Bank Sampah</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"  role="tab" aria-controls="messages" onclick="rute()">Lokasi Tujuan</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"  role="tab" aria-controls="messages" onclick="ruteakhir()">Rute</a>
                      <input type="hidden" name="latgps" id="latgps" value="">
                      <input type="hidden" name="longps" id="longps" value="">
                      <input type="hidden" name="latuser" id="latuser" value="">
                      <input type="hidden" name="lonuser" id="lonuser" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-sidebar collapsed dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Laporkan Lokasi
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <div class="list-group" id="list-tab" role="tablist">
                      <form action="/lokasi/store" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="">Title</label>
                          <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="">Description</label>
                          <input type="text" name="deskripsi"  class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="">Pilih Lokasi</label>
                          <button type="button" name="button" class="btn btn-primary form-control" onclick="tambahLokasi()">+ Pilih Marker</button>
                        </div>
                        <div class="form-group">
                          <label for="">Type</label>
                          <input type="hidden" id="lat" name="lat">
                          <input type="hidden" id="lon" name="lon">
                          <select name="type" class="form-control" id="exampleFormControlSelect1">
                            <option value="sampah">Lokasi Sampah</option>
                            <option value="tpa">Lokasi TPA</option>
                          </select>
                        </div>

                        <center><button type="submit" class="btn btn-success">Tambahkan Data</button></center>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
        @if(isset($notif))
        <div class="alert alert-success" role="alert">
          {{$notif}}
        </div>
        @endif
        <br>
        <!-- END GRID LOCATION -->
        </div>
        <!-- END CONTAINER -->


      <script src="{{URL::asset('js/map.js')}}" charset="utf-8"></script>
          <!-- <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaKLihHUYfMPMCdAgzPlsXamo9BthmImk&callback=initMap">
          </script> -->



      @include('layouts.footer')
@endsection
