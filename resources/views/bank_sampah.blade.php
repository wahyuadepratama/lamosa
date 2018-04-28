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
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Type</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Number</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group col">
                            <label for="exampleFormControlTextarea1">Deskripsi Lokasi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </div>
                        <center>
                        <div class="form-group">
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
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Type</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Number</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group col">
                            <label for="exampleFormControlTextarea1">Deskripsi Lokasi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </div>
                        <center>
                        <div class="form-group">
                        <button type="submit" class="btn btn-success form-control">Request Penjualan</button>
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
