 <?php
               
              

mb_language("Japanese");//文字コードの設定
mb_internal_encoding("UTF-8");

//住所を入れて緯度経度を求める。
$address = '浦々';
$myKey = "AIzaSyDsDfT3bOMmKfwz3y2FyggU8-8hcg-Oh4s";
print("住所=$address\n");

$address = urlencode($address);

$url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "+CA&key=" . $myKey ;

$contents= file_get_contents($url);
$jsonData = json_decode($contents,true);
if(count($jsonData["results"]) > 0){

	$lat = $jsonData["results"][0]["geometry"]["location"]["lat"];
$lng = $jsonData["results"][0]["geometry"]["location"]["lng"];
print("lat=$lat\n");
print("lng=$lng\n");

echo "うまくいったで";
}else{
	echo "エラー処理も完璧";
}



?>