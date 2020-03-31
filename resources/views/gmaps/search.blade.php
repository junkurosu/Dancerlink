@extends('layouts.app')

@section('child-title')スタジオ検索@endsection
@section('child-description')スタジオ検索ページです。@endsection

@section('breadcrumb')
{{ Breadcrumbs::render('mapsearch') }}
@stop

@section('content')
 
<div class="panel panel-default">
    <div class="panel-heading">Search</div>

    <div class="panel-body">
       <!--  mapを表示する領域を設定する -->
        <div id="map" style="height: 500px; width: 100%; margin: 2rem auto 0;"></div>

   
    <!-- jqueryの読み込む -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsDfT3bOMmKfwz3y2FyggU8-8hcg-Oh4s&libraries=places"
    ></script>
    <!-- js -->
    <script type="text/javascript">
      var map;
var marker = [];
var infoWindow = [];
var markerData = [ // マーカーを立てる場所名・緯度・経度
 @foreach($studios as $studio)
 {
        id:{{$studio->id}},
        name: '{{$studio->name}}',
     lat: {{$studio->lat}},
        lng: {{$studio->lng}},
        url:'{{$studio->url}}'
 },
@endforeach
];

initMap();
  
function initMap() {
 // 地図の作成
    var mapLatLng = new google.maps.LatLng({{$latlng}}); // 緯度経度のデータ作成
   map = new google.maps.Map(document.getElementById('map'), { // #sampleに地図を埋め込む
     center: mapLatLng, // 地図の中心を指定
      zoom: 14 // 地図のズームを指定
   });
  
 // マーカー毎の処理
 for (var i = 0; i < markerData.length; i++) {
        markerLatLng = new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']}); // 緯度経度のデータ作成
        marker[i] = new google.maps.Marker({ // マーカーの追加
         position: markerLatLng, // マーカーを立てる位置を指定
            map: map // マーカーを立てる地図を指定
       });
  
     infoWindow[i] = new google.maps.InfoWindow({ // 吹き出しの追加
         content: '<div class="map">' +'<a href= /studio/' + markerData[i]['id'] +' >' + markerData[i]['name'] +'</a> '+'</div>' // 吹き出しに表示する内容
       });
  
     markerEvent(i); // マーカーにクリックイベントを追加
 }
}
  
// マーカーにクリックイベントを追加
function markerEvent(i) {
    marker[i].addListener('click', function() { // マーカーをクリックしたとき
      infoWindow[i].open(map, marker[i]); // 吹き出しの表示
  });
}

    </script>
    </div>
</div>
@endsection