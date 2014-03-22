<?php
$getCurrentGeoLoc = getCurrentGeoLocation();
$newData = json_decode($getCurrentGeoLoc, true);
?>

<div class="mp-widget maps-widget">
    <div class="mp-widget-top">
        <div class="mp-widget-title">
            Find pros today!
        </div>
    </div>
</div>

<script type="text/javascript">
    function initialize() {

        var locations = [
            ['DESCRIPTION', 33.74392, -117.039259]
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: new google.maps.LatLng(<?php echo $newData['lat']; ?>, <?php echo $newData['long']; ?>),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
                //icon: locations[i][3]
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
    }

    window.onload = loadScript;
</script>

<div id="map" style="width: 100%; height: 400px;"></div>
