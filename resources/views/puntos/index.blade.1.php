<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Marcadores con BD</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 100%;
        height: 500px;
        border: 1px solid #000;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
        
      function initMap() {
        var myLatLng_ini = {lat: -12.108386, lng: -77.026004};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: myLatLng_ini,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            keyboardShortcuts: true,
            disableDoubleClickZoom: true,
            draggable: true,
            scrollwheel: true,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL
            },
            streetViewControl: false,
            streetViewControlOptions: {
                position: google.maps.ControlPosition.RIGHT_TOP
            },
            panControl: true,
            panControlOptions: {
                position: google.maps.ControlPosition.TOP_CENTER
            },
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.TOP_LEFT,
                mapTypeIds: [
                    google.maps.MapTypeId.ROADMAP,
                    google.maps.MapTypeId.HYBRID
                ]
            }
        });
        
        var ruta = new Array();
        @foreach($puntos as $punto)

            var contentString{{ $punto->id }} = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">{{ $punto->nombre }}</h1>'+
            '<div id="bodyContent">'+
            '<p>{{ $punto->descripcion }}</p>'+
            '<p>{{ $punto->direccion }}</p>'+
            '</div>'+
            '</div>';

            var infowindow{{ $punto->id }} = new google.maps.InfoWindow({
            content: contentString{{ $punto->id }}
            });


            var myLatLng = {lat: {{ $punto->lat }}, lng: {{ $punto->lng }}}; 
            var marker{{ $punto->id }} = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: '{{$punto->lat }}' + ', '+ '{{$punto->lng }}',
            });

            marker{{ $punto->id }}.addListener('click', function() {
                infowindow{{ $punto->id }}.open(map, marker{{ $punto->id }});
            });

            
            ruta.push(myLatLng);            
            var flightPath = new google.maps.Polyline({
                path: ruta,
                geodesic: true,
                strokeColor: '#33CCFF',
                strokeOpacity: 2.0,
                strokeWeight: 7
            });

            flightPath.setMap(map);

        @endforeach
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMKAMOYXRR0JPkW3IKbBxVk3Qp4vs8DsQ&callback=initMap">
    </script>
  </body>
</html>