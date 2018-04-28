@extends('layouts.app')

@section('content')

      <div class="container" style="padding-top:30px;">
          <div class="grid-input-data">
            <div class="data_lokasi">
              <div class="list-group">
                <div href="#" class="list-group-item title">
                  Data Lokasi
                </div>
                <div class="data-col">
                  <div class="data-info">
                    <form>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Judul</label>
                        <input type="email" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Lokasi</label>
                        <textarea class="form-control"  rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="email" class="form-control">
                      </div>

                  </div>
                  <div class="upload-foto">
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Upload Foto</label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary btn-block">Upload</button>
                    </form>
                  </div>
                  </div>

              </div>
            </div>
            <div class="keterangan">
              <div class="list-group">
                <div href="#" class="list-group-item title">
                  Keterangan
                </div>
                <div href="#" class="panel-body-input">

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
