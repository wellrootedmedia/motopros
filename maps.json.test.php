<?php
/*
 * Template Name: maps json test
 */

$url="http://maps.googleapis.com/maps/api/geocode/json?address=winchester,ca&sensor=false";

$json = file_get_contents($url);
$data = json_decode($json, TRUE);

//echo '<pre>';
//print_r($data['results'][0]['geometry']['location']);
//echo '</pre>';


//$locations = $data['results'][0]['geometry']['location'];
//foreach( $locations as $location) {
//    echo $location['lat'];
//}
?>


<br/><br/>

<?php

//$getCurrentGeoLoc = getCurrentGeoLocation();
//$newData = json_decode($getCurrentGeoLoc, true);
//
//$currentLat = $newData['lat'];
//$currentLong = $newData['long'];
//$icon = $newData['icon'];
//
//echo $currentLat . " " . $currentLong . " " . $icon;



?>



<br/><br/>


<?php
//$jsonDecode = json_decode($geoLocs, true);
//print_r($jsonDecode);
//foreach ( $geoLocs as $geoLoc ) {
//    print_r($geoLoc);
//}
?>



<br/><br/>





<?php
$retrieveGoogleMapLocations = retrieveGoogleMapLocations();

print_r($retrieveGoogleMapLocations);
?>