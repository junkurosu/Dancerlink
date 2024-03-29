@section('meta')
<meta name="robots" content="nofollow,noindex">
@stop


<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map2</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>

    <div id="map" style="height: 500px; width: 50%; margin: 2rem auto 0;"></div>


    <!-- jqueryの読み込む -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsDfT3bOMmKfwz3y2FyggU8-8hcg-Oh4s&libraries=places"
    ></script>
    <!-- js -->
    <script type="text/javascript">
      var map;
      var service;
      var infowindow;
      initialize()

      function initialize() {
        // 位置座標のインスタンスを作成する
        var pyrmont = new google.maps.LatLng({{$address}});


        map = new google.maps.Map(document.getElementById('map'), {
             center: pyrmont,
             zoom: 15
           });
        
       //指定位置の半径1500m内のカフェを検索
        var request = {
          location: pyrmont,
          radius: '1500',
          type: ['cafe']　 // https://developers.google.com/places/supported_types 参照
        };
        service = new google.maps.places.PlacesService(map);
        service.nearbySearch(request, callback);
      }

      function createMarker(latlng, icn)
      {
        // マーカー作成　　https://developers.google.com/maps/documentation/javascript/examples/marker-simple　参照
        var marker = new google.maps.Marker({
          position: latlng,
          map: map,
         
        });
      }

      function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            var place = results[i];
            latlng = place.geometry.location;
            icn = place.icon;

            createMarker(latlng, icn);
          }
        }
      }

    </script>
  </body>
</html>