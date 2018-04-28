<!DOCTYPE html>
<html>
  <?php include_once 'layouts/head.php'; ?>
  <body>
    <?php include_once 'layouts/header.php'; ?>

      <div class="container" style="padding-top:30px;">
          <div class="grid-input-data">
            <div class="data_lokasi">
                <div class="panel">
                  <div class="panel-header">
                      <p style="margin:0px;">
                        Data Lokasi
                      </p>
                  </div>
                  <div class="panel-body">
                    <div class="data-info">
                      <form>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Judul</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Deskripsi Lokasi</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Alamat</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <center><button type="submit" class="btn btn-success">Submit</button></center>
                        </form>
                    </div>
                    <div class="upload-foto">
                      <form>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Upload Foto</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        </form>
                    </div>
                  </div>
                </div>
            </div>
            <div class="keterangan">
              <div class="panel">
                <div class="panel-header">Keterangan</div>
                <div class="panel-body">

                </div>
              </div>
            </div>

        </div>
        <br>
        <!-- END GRID LOCATION -->
      </div>
        <!-- END CONTAINER -->
        <?php include_once 'layouts/footer.php'; ?>

  </body>
</html>
