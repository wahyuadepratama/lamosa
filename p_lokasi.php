<!DOCTYPE html>
<html>
  <?php include_once 'layouts/head.php'; ?>
  <body>
    <?php include_once 'layouts/header.php'; ?>
    <?php include_once 'controller/includeleaflet.php' ?>
    <?php include_once 'controller/getdatalokasi.php' ?>
    <?php include_once 'controller/getdatabank.php' ?>

    <script>

     var argeojson = <?php echo json_encode($data) ?>;
     var argeojsonbank=<?php echo json_encode($bank)?>

    </script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
crossorigin=""/>

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
  integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
  crossorigin=""></script>

      <div class="container" style="padding-top:30px;">
        <div class="grid-location">
          <div class="contentku" id="map">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><div id="mapid"></div></div>
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
                    <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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

                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Input Data
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <div class="list-group" id="list-tab" role="tablist">
                      <form>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Email address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Email address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Example select</label>
                          <button type="button" name="button" class="btn btn-danger form-control" >+ Pilih Marker</button>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Example select</label>
                          <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>

                        <center><button type="submit" class="btn btn-primary">Tambahkan Data</button></center>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>
          <div class="location-info">
            <div class="content-info">
              <h5>Information</h5>
            </div>
          </div>
        </div>
        <br>
        <!-- END GRID LOCATION -->
        </div>
        <!-- END CONTAINER -->
        <?php include_once 'layouts/footer.php'; ?>
      <script src="assets/js/map.js" charset="utf-8"></script>
      <!-- <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaKLihHUYfMPMCdAgzPlsXamo9BthmImk&callback=initMap">
      </script> -->

      <script src="controller/map.js">

      </script>

  </body>
</html>
