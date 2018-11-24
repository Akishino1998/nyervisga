<!DOCTYPE html>
<html>
    <head>
    <title>HEHE</title>
        <style>
            #map {
                height: 400px;
            }
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZkuHiUXYr2MnjteerrkucCJ8wUCu5-zo&callback=initMap" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <body>
        <div id="map"></div>
        <textarea id="latclicked" cols="20" rows="1"></textarea>
        <textarea id="longclicked" cols="20" rows="1"></textarea>
        Address:
        <input id="searchTextField" type="text" size="50" style="text-align: left;width:357px;direction: ltr;">
    <script>
    var map;
    var markers = [];

    function initMap() {
        var haightAshbury = {lat: -0.489776, lng: 117.144242};
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: haightAshbury,
            mapTypeId: 'roadmap'
        });
        

        // This event listener will call addMarker() when the map is clicked.
        map.addListener('click', function(event) {
            addMarker(event.latLng);
            document.getElementById('latclicked').innerHTML = event.latLng.lat();
            document.getElementById('longclicked').innerHTML =  event.latLng.lng();

            var input = document.getElementById('searchTextField');
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({"latLng":event.latLng}, function (results) {
              $("#searchTextField").val(results[0].formatted_address);
            });
        });
    }

      // Adds a marker to the map and push to the array.
    function addMarker(location) {
        setMapOnAll(null);
        var marker = new google.maps.Marker({
            position: location,
            map: map  
        });
        markers.push(marker);
    }

    // Sets the map on all markers in the array.
    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }
    </script>
    </body>
</html>