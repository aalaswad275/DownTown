<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
      integrity="sha256-o9N1jH1nYp0+vA6sQp+QGkq6nIRyHofASro9v+2Hjhk=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-o9N1jH1nYp0+vA6sQp+QGkq6nIRyHofASro9v+2Hjhk=" crossorigin=""></script>

</head>
<body>

    <div class="mb-3">
    <label class="form-label">Latitude</label>
    <input type="text" id="latitude" name="latitude" class="form-control" readonly>
</div>

<div class="mb-3">
    <label class="form-label">Longitude</label>
    <input type="text" id="longitude" name="longitude" class="form-control" readonly>
</div>

<div id="map" style="height: 400px;"></div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
window.onload = function() {
    // Get references to input fields
    let latInput = document.getElementById('latitude');
    let lngInput = document.getElementById('longitude');

    // Default coordinates
    let defaultLat = 32.8872;
    let defaultLng = 13.1913;

    // Initialize map
    let map = L.map('map').setView([defaultLat, defaultLng], 7);

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Add draggable marker
    let marker = L.marker([defaultLat, defaultLng], {draggable: true}).addTo(map);

    // Set initial input values
    latInput.value = defaultLat;
    lngInput.value = defaultLng;

    // Update inputs when marker is dragged
    marker.on('dragend', function(e) {
        let pos = marker.getLatLng();
        latInput.value = pos.lat;
        lngInput.value = pos.lng;
    });

    // Update marker & inputs when clicking on map
    map.on('click', function(e) {
        marker.setLatLng(e.latlng);
        latInput.value = e.latlng.lat;
        lngInput.value = e.latlng.lng;
    });
};
</script>

</body>
</html>
