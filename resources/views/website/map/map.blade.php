<!DOCTYPE html>
<html>

<head>
    <title>Laravel Leaflet Map</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />

    <style>
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="map"></div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

    <script>
        var map = L.map('map').setView([24.8607, 67.0011], 1);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        map.locate({
            setView: true,
            maxZoom: 16
        });

map.on('locationfound', function(e) {
    var user_latlng = e.latlng;

    // User marker
    L.marker(user_latlng)
        .addTo(map)

    // Circle (1 km radius)
    L.circle(user_latlng, {
        radius: 1000,
        color: "blue",
        fillColor: "#30f",
        fillOpacity: 0.1
    }).addTo(map);

    // Fetch drivers with user + location
    fetch(`/nearby-drivers?lat=${user_latlng.lat}&lng=${user_latlng.lng}&radius=1000`)
        .then(res => res.json())
        .then(drivers => {
            console.log("Drivers Data:", drivers);

         drivers.forEach(driver => {
    let dLat = driver.latitude;
    let dLng = driver.longitude;

    if (dLat && dLng) {
        let driverLatLng = L.latLng(dLat, dLng);
        let distance = user_latlng.distanceTo(driverLatLng);

        // Icon color depend on distance
        let iconUrl = (distance <= 1000)
            ? "https://maps.gstatic.com/mapfiles/ms2/micons/red-dot.png"
            : "https://maps.gstatic.com/mapfiles/ms2/micons/ltblue-dot.png";

        L.marker(driverLatLng, {
            icon: L.icon({
                iconUrl: iconUrl,
                iconSize: [32, 32],
                iconAnchor: [16, 32],
                popupAnchor: [0, -32]
            })
        })
        .addTo(map)
        .bindPopup(`
            <b>Driver: ${driver.driver?.user?.name ?? "N/A"}</b><br>
            📞 Phone: ${driver.driver?.phone ?? "N/A"}<br>
            📍 Location: ${dLat.toFixed(5)}, ${dLng.toFixed(5)}<br>
            📏 Distance: ${(distance/1000).toFixed(2)} km
        `);
    }
});

        });
});



        map.on('locationerror', function(e) {
            alert("Location access nahi mil saka: " + e.message);
        });
    </script>
</body>

</html>