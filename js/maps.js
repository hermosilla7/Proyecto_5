var map=null,myZoom=15,myLat,myLng;

  function initMap() {

      //nuevo objeto mapa
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: myZoom,
        center: {lat: myLat, lng: myLng}
      });

      //nuevo objeto marker
      var marker = new google.maps.Marker({
        position: {lat: myLat, lng: myLng},
        icon: 'img/green.png',
        map: map
      });

      //evento que se ejecuta al arrastrar el marker
      google.maps.event.addListener(marker, 'click', function(){
         window.open('http://maps.google.com/maps?q='+myLat+','+myLng+'&hl=es');
      });
  }
