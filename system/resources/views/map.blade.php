<!DOCTYPE html>
<html>
<head>
    <title>Map Display</title>
    <link rel="stylesheet" href="ui/css/app.css">
    <link rel="stylesheet" href="node_modules/leaflet/dist/leaflet.css">
    <script src="node_modules/leaflet/dist/leaflet.js"></script>
</head>
<body>
    <div id="map" style="width: 800px; height: 600px;"></div>

    
    <script>
        var latitude = {!! $latitude !!};
        var longitude = {!! $longitude !!};

        var map = L.map('map').setView([latitude, longitude], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([latitude, longitude]).addTo(map)
            .bindPopup('Latitude: ' + latitude + '<br>Longitude: ' + longitude)
            .openPopup();
    </script>
</body>
</html>
