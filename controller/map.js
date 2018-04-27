var mymap = L.map('mapid').setView([-0.9154789999999999, 100.46043549999999], 13);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYXh2ZXI3IiwiYSI6ImNqZjZ0NXk2NjA4NzI0MG44djVyOXU2cXAifQ.N-pJV3Uw0nOhjvLz9E4Zuw'
}).addTo(mymap);


var latlng;
var latAwal;
var lonAwal;
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


function lokasiSampah()
{
   alert("Tampilkan Lokasi Sampah");
   console.log(argeojson[0]['lat']);
   console.log(argeojson[0]['lang']);
   console.log(argeojson.length);

   length= argeojson.length;
   j=0;
   while(j<length)
   {
     marker[j] = L.marker([argeojson[j]['lat'], argeojson[j]['lang']]).addTo(mymap);
     marker[j].bindPopup("<b>"+argeojson[j]['title']+"</b>"+"<br/>"+"Deskripsi: "+argeojson[j]['description']+"<br/> Lokasi :"+argeojson[j]['lat']+","+argeojson[j]['long']+"<br>Status : "+argeojson[j]['status']+"<br/>Created: "+argeojson[j]['created_at']);
     j++;
   }
}
