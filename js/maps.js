var map, latitud, longitud, direccion;

function initMap() {
  var centro = new google.maps.LatLng(41.368115, 2.116750);
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: centro,
  });

  var marker = new google.maps.Marker({
    position: {lat: 41.368115, lng: 2.116750},
    map: map
  });
}
