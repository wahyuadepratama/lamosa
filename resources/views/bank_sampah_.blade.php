@extends('layouts.app')

@section('content')


      <div class="container" style="padding-top:30px;">
        <div class="grid-bank-sampah-0">
          <div class="list_sampah">
            <div class="box-list">
              <div class="card" style="width: auto">
                <img class="card-img-top" src="img/ss/tembaga 1.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="grid-button">
                    <div class="btn-01">
                      <a href="#" class="btn btn-primary">Lihat Sampah</a>
                    </div>
                    <div class="btn-02">
                      <a href="#" class="btn btn-success">Beli/Jual</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-list">
              <div class="card" style="width: auto">
                <img class="card-img-top" src="img/ss/beling.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="grid-button">
                    <div class="btn-01">
                      <a href="#" class="btn btn-primary">Lihat Sampah</a>
                    </div>
                    <div class="btn-02">
                      <a href="#" class="btn btn-success">Beli/Jual</a>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            <div class="box-list">
              <div class="card" style="width: auto">
                <img class="card-img-top" src="img/ss/aluminium kre.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div class="grid-button">
                    <div class="btn-01">
                      <a href="#" class="btn btn-primary">Lihat Lokasi</a>
                    </div>
                    <div class="btn-02">
                      <a href="#" class="btn btn-success">Beli/Jual</a>
                    </div>
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
