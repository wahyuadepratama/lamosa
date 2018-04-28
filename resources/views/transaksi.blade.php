@extends('layouts.app')

@section('content')
      <div class="container" style="padding-top:30px;">
        <div class="grid-bank-sampah">
          <div class="price">
            <div class="panel">
              <div class="panel-header">
                <h6>Harga Sampah</h6>
              </div>
              <div class="panel-body">
                <ul class="list-group list-group-flush">
                  @foreach($transaksi as $data)
                  <li class="list-group-item">Nama Sampah: {{$data->junk_name}}</li>
                  <li class="list-group-item">Harga: {{$data->price}}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="ket_bank">
            <div class="panel">
              <div class="panel-header">
                <h6>Keterangan</h6>
              </div>
              <div class="panel-body">

              </div>
            </div>
          </div>
          <div class="jual_beli">
            <div class="" id="accordion" >
              <div class="card" style="margin-bottom: 20px;">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-sidebar " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Jual Sampah
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <div class="row" style="padding:15px">
                      <form method="post" action="/transaksi/send">
                        {{ csrf_field() }}
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="">Jenis Sampah</label>
                            <select name="junk_name" class="form-control" id="">
                              @foreach($transaksi as $data)
                                <option value="{{$data->junk_name}}">{{$data->junk_name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="">Berat Sampah (Kg)</label>
                            <input class="form-control" type="number" name="berat" value="">
                          </div>
                          <div class="form-group col">
                            <label for="">Deskripsi (optional)</label>
                            <textarea name="deskripsi" class="form-control" id="" rows="3"></textarea>
                          </div>
                        </div>
                        <center>
                        <div class="form-group">
                          <input type="hidden" name="junk_bank_id" value="{{$id}}">
                        <button type="submit" class="btn btn-success form-control">Submit</button>
                        </div>
                        </center>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-sidebar collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Beli Sampah
                    </button>
                  </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <div class="row" style="padding:15px">
                      <form method="post" action="/transaksi/send">
                        {{ csrf_field() }}
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="">Jenis Sampah</label>
                            <select name="junk_name" class="form-control" id="">
                              @foreach($transaksi as $data)
                                <option value="{{$data->junk_name}}">{{$data->junk_name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="">Berat Sampah (Kg)</label>
                            <input class="form-control" type="number" name="berat" value="">
                          </div>
                          <div class="form-group col">
                            <label for="">Deskripsi (optional)</label>
                            <textarea name="deskripsi" class="form-control" id="" rows="3"></textarea>
                          </div>
                        </div>
                        <center>
                        <div class="form-group">
                        <input type="hidden" name="junk_bank_id" value="{{$id}}">
                        <button type="submit" class="btn btn-success form-control">Submit</button>
                        </div>
                        </center>
                      </form>
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
