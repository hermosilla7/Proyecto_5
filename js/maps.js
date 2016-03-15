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

  function buscarDireccion() {
      // Obtenemos la dirección y la asignamos a una variable
      var direccion = document.getElementById('direccion').value;
      // Creamos el Objeto Geocoder
      var geocoder = new google.maps.Geocoder();
      // Hacemos la petición indicando la dirección e invocamos la función
      // geocodeResult enviando todo el resultado obtenido
      geocoder.geocode({ 'address': direccion}, geocodeResult);
    };

  function geocodeResult(results, status) {
      if (status === "OK"){
          var input = results[0].geometry.location;
          document.getElementById('ubicacion_lat').value=input.lat();
          document.getElementById('ubicacion_lon').value=input.lng();
        }else {
          document.getElementById('ubicacion_lat').value='41.352205';
          document.getElementById('ubicacion_lon').value='2.111291';

        }

  }
