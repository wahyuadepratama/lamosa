@extends('layouts.app')

@section('content')


      <div class="container" style="padding-top:30px;">
        <div class="grid-bank-sampah-0">
          <div class="list_sampah">

            @foreach($bank as $bank)
            <div class="box-list">
              <div class="card" style="width: auto">
                <img class="card-img-top" src="img/ss/tembaga 1.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$bank->name}}</h5>
                  <p class="card-text">{{$bank->description}}</p>
                  <div class="grid-button">
                    <div class="btn-01">
                      <a href="/lokasi/{{$bank->id}}" class="btn btn-primary">Lihat Sampah</a>
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

        </div>
        <br>
        <!-- END GRID LOCATION -->
      </div>
        <!-- END CONTAINER -->
          @include('layouts.footer')

@endsection
