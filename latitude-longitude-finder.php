<!DOCTYPE html>
<html lang="en">
<head>
<title>Simple Latitude Longitude finder</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Map Latitude Longitude finder. Online tool to find the latitude and longitude of a location chosen on a map">
<meta name="keywords" content="latitude longitude finder, latitude longitude lookup, show latitude longitude on map, find latitude and longitude"/>
<meta name="author" content="www.eti.pw">
<meta name="robots" content="all"/>
</head>

<body>

<h2>Latitude Longitude finder</h2>

<?php

$latitude = htmlentities($_POST['latitude'], ENT_QUOTES, 'UTF-8');
$longitude = htmlentities($_POST['longitude'], ENT_QUOTES, 'UTF-8');

if($_POST){

print ('<b>Map Latitude Longitude:</b>
<form action="" method="post">
<br>Enter a latitude/longitude:
<input type="text" name="latitude" id="latitude" placeholder="latitude" /><input type="text" name="longitude" id="longitude" placeholder="longitude" />
<input type="submit" class="button" value="Go to this Location" /><br />
<small>(You can put any latitude/longitude to see the location on the map)</small><br>
<small>e.g. 27.3717 -81.4306</small>
</form>');

// We will use free google "api" :) Keyless access to Google Maps Platform is deprecated since June 11th, 2018
// Get Key if You want from: https://cloud.google.com/maps-platform/

// NO NEED KEY WITH THIS SIMPLE FORM
echo "<iframe src='https://google-developers.appspot.com/maps/documentation/utils/geocoder/#q%3D{$latitude}%2520{$longitude}' width='100%' height='900' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe>";

}

else {

print ('<b>Map Latitude Longitude:</b>
<form action="" method="post">
<br>Enter a latitude/longitude:
<input type="text" name="latitude" id="latitude" placeholder="latitude" /><input type="text" name="longitude" id="longitude" placeholder="longitude" />
<input type="submit" class="button" value="Go to this Location" /><br />
<small>(You can put any latitude/longitude to see the location on the map)</small><br>
<small>e.g. 27.3717 -81.4306</small>
</form>');

}
				
?>
