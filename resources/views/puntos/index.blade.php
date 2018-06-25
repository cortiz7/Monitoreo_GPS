@extends('puntos.main-front')

@section('content')

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 100%;
        height: 500px;
        /*border: 1px solid #000;*/
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

   <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Visor de Rutas</h3>              
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div id="map"></div>
            </div>
        </div>
    </div>

        <div class="col-md-4">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Dispositivos</h3>              
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nombre</th>
                  <th>Estado</th>
                  <th style="width: 20%">Actualiza...</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Vehiculo PEX-455</td>
                  <td><span class="badge bg-green">Activo</span></td>
                  <td>10 min</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Vehiculo TES-364</td>
                  <td><span class="badge bg-red">Inactivo</span></td>
                  <td>50 min</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Vehiculo THI-187</td>
                  <td><span class="badge bg-yellow">Desconocido</span></td>
                  <td>30 min</td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Vehiculo ATI-345</td>
                  <td><span class="badge bg-green">Activo</span></td>
                  <td>25 min</td>
                </tr>                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Estado</h3>              
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>                  
                  <th>Parametro</th>
                  <th>Valor</th>                  
                </tr>
                <tr>
                  <td>Dirección</td>
                  <td>Lima Norte</td>
                </tr>
                <tr>
                  <td>Presición</td>
                  <td>1.10 KM</td>
                </tr>
                <tr>
                  <td>Distancia</td>
                  <td>80.00 KM</td>
                </tr>
                <tr>
                  <td>Nivel de Batería</td>
                  <td>21.00 %</td>
                </tr>
                <tr>
                  <td>Movimiento</td>
                  <td>Si</td>
                </tr>
                <tr>
                  <td>Velocidad</td>
                  <td>5 KM/H</td>
                </tr>           
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reporte de Ruta</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Nombre de Dispositivo</th>
                  <th>Hora</th>
                  <th>Latitud</th>
                  <th>Longitud</th>
                  <th>Velocidad</th>
                  <th>Dirección</th>
                </tr>
                <tr>
                  <td>Vehiculo PEX-455</td>
                  <td>2018-06-24 2:31:03 p.m.</td>
                  <td>11° 57' 45" S</td>
                  <td>76° 59' 15" W</td>
                  <td>2.8</td>
                  <td>San Juan</td>
                </tr>
                <tr>
                  <td>Vehiculo PEX-455</td>
                  <td>2018-06-24 2:31:03 p.m.</td>
                  <td>11° 57' 45" S</td>
                  <td>76° 59' 15" W</td>
                  <td>2.8</td>
                  <td>San Juan</td>
                </tr>
                <tr>
                  <td>Vehiculo PEX-455</td>
                  <td>2018-06-24 2:31:03 p.m.</td>
                  <td>11° 57' 45" S</td>
                  <td>76° 59' 15" W</td>
                  <td>2.8</td>
                  <td>San Juan</td>
                </tr>
                <tr>
                  <td>Vehiculo PEX-455</td>
                  <td>2018-06-24 2:31:03 p.m.</td>
                  <td>11° 57' 45" S</td>
                  <td>76° 59' 15" W</td>
                  <td>2.8</td>
                  <td>San Juan</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>     

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

@endsection

