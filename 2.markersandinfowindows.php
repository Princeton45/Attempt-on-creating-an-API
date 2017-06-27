<!DOCTYPE html>
<html>
 <head>
 <title>Markers and Infowindows</title>
 <meta name="viewport" content="initial-scale=1.0,
user-scalable=no">
 <meta charset="utf-8">
 <style>
 html, body{
 height:100%;
 }
 #map{
 height:60%;
 }
 </style>
 </head>

 <body>
 <div id="map"></div>

 <script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwJ
2Vepe9L2Miuh7QH87SR_RItIXHlX6Q"></script>
 <script>

 //set map options
 var myLatLng = {lat: 51.5, lng: -0.1};
 var mapOptions = {
 center: myLatLng,
 zoom: 7,
 mapTypeId: google.maps.MapTypeId.SATELLITE

 };

 //create map
 var map = new
google.maps.Map(document.getElementById('map'),
mapOptions);

 //setting the mapTypeId upon construction

map.setMapTypeId(google.maps.MapTypeId.ROADMAP);


 //create marker1
 var marker1Options = {
 position: myLatLng,
 map: map,
 title: "This is London",
 draggable: true,
 animation: google.maps.Animation.DROP
//ANIMATION

 }
 var marker1 = new
google.maps.Marker(marker1Options);

 //create InfoWindow
 var contentString = "<div>This is an
InfoWindow</div>";
 var infowindow = new google.maps.InfoWindow({
 content: contentString,
 maxWidth: 100
 });

 //add lister to the marker to show InfoWindow

 marker1.addListener("click", function(){
 infowindow.open(map, marker1);
 });





 //create marker2
 var marker2Options = {
 position: {lat:52.1337, lng: -0.4577},
 title: "This is Bedford."
 }
 var marker2 = new
google.maps.Marker(marker2Options);

marker2.setAnimation(google.maps.Animation.BOUNCE);
 marker2.setMap(map);
 </script>
 </body>
</html>