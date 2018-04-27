var mymap = L.map('mapid').setView([-0.921440, 100.443197], 13);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYXh2ZXI3IiwiYSI6ImNqZjZ0NXk2NjA4NzI0MG44djVyOXU2cXAifQ.N-pJV3Uw0nOhjvLz9E4Zuw'
}).addTo(mymap);


var latlng;
var latAwal;
var lonAwal;
var newMarker=[];
function gpsLokasi()
{

  navigator.geolocation.getCurrentPosition(function(location) {
    var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
    mymap.setView(latlng, 12);
    newMarker = new L.marker(latlng).addTo(mymap);
    latAwal=location.coords.latitude;
    lonAwal=location.coords.longitude;

  });



}

var latitude;
var longitude;
var marker=[];

function removemarker()
{
  console.log(marker.length);
  var i=0;
  var jumlahMarker=marker.length;
  while (i<jumlahMarker)
  {
  mymap.removeLayer(marker[i]);
  i++;
  }
}

function lokasiSampah()
{
   alert("Tampilkan Lokasi Sampah");
   removemarker();
   console.log(argeojson[0]['lat']);
   console.log(argeojson[0]['lang']);
   console.log(argeojson.length);

   length= argeojson.length;
   j=0;
   while(j<length)
   { console.log(argeojson[j]['type']);
     if(argeojson[j]['type']=="1")
     {
     marker[j] = L.marker([argeojson[j]['lat'], argeojson[j]['lang']]).addTo(mymap);
     marker[j].bindPopup("<b>"+argeojson[j]['title']+"</b>"+"<br/>"+"Deskripsi: "+argeojson[j]['description']+"<br/> Lokasi :"+argeojson[j]['lat']+","+argeojson[j]['lang']+"<br>Status : "+argeojson[j]['status']+"<br/>Created: "+argeojson[j]['created_at']);
    }
    j++;
   }
}


function lokasitpa()
{

   alert ("Lokasi TPA");
   removemarker();

   length= argeojson.length;
   j=0;
   while(j<length)
   { console.log(argeojson[j]['type']);
     if(argeojson[j]['type']=="2")
     {
     marker[j] = L.marker([argeojson[j]['lat'], argeojson[j]['lang']]).addTo(mymap);
     marker[j].bindPopup("<b>"+argeojson[j]['title']+"</b>"+"<br/>"+"Deskripsi: "+argeojson[j]['description']+"<br/> Lokasi :"+argeojson[j]['lat']+","+argeojson[j]['lang']+"<br>Status : "+argeojson[j]['status']+"<br/>Created: "+argeojson[j]['created_at']);
    }
    j++;
   }


}

function lokasibanksampah()
{

  alert("Lokasi Bank Sampah");
  removemarker();

  length= argeojsonbank.length;
  j=0;
  while(j<length)
  {

    marker[j] = L.marker([argeojsonbank[j]['lat'], argeojsonbank[j]['lang']]).addTo(mymap);
    marker[j].bindPopup("<b>"+argeojsonbank[j]['name']+"</b>"+"<br/>"+argeojsonbank[j]['description']);
   j++;
  }

}


function gps()
{

  navigator.geolocation.getCurrentPosition(function(location) {
    var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
    mymap.setView(latlng, 12);
    newMarker = new L.marker(latlng).addTo(mymap);
    latAwal=location.coords.latitude;
    lonAwal=location.coords.longitude;

  });

console.log("Posisi GPS otomatis");

}

function removeNewMarker()
{

  var i=0;
  var jumlahNewMarker=newMarker.length;
  console.log(jumlahNewMarker);
  while (i<jumlahNewMarker)
  {
  mymap.removeLayer(newMarker[i]);
  i++;
  }
  jumlahNewMarker=0;
}

var jumlahNewMarker=0;
function manual()
{
  var tanda;
  swal("Pilih Posisi Sampah tersebut");
  mymap.on('click', function(e) {
          newMarker[jumlahNewMarker] = new L.marker(e.latlng).addTo(mymap);
          latitude=e.latlng.lat;
          longitude=e.latlng.lng;
          latAwal=latitude;
          lonAwal=longitude;
          console.log(latAwal);
          console.log(lonAwal);
          jumlahNewMarker++;
  });
  latAwal=latitude;
  lonAwal=longitude;

}



function rute()
{


  swal({
title: "Posisi GPS?",
text: "Apabila posisi GPS tidak akurat anda bisa memilih posisi manual!!",
icon: "warning",
buttons: true,
dangerMode: false,
})
.then((willDelete) => {
if (willDelete) {
  gps();
  swal("Posisi GPS Dipilih", {


  });
} else {
  swal("Klik Peta untuk posisi manual");
  manual();
}
});


}
