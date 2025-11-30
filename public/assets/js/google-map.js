// Wait for page to load
document.addEventListener("DOMContentLoaded", function () {
    // Center on Sweden (Stockholm area)
    var map = L.map('map').setView([59.3293, 18.0686], 6); // 6 = shows whole Sweden nicely

    // Free OpenStreetMap tiles (no API key needed!)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Add a nice marker in Stockholm
    L.marker([59.3293, 18.0686])
        .addTo(map)
        .bindPopup("<b>We are in Sweden!</b><br>Stockholm")
        .openPopup();

    // Optional: Add more cities
    L.marker([57.7089, 11.9746]).addTo(map).bindPopup("Gothenburg");
    L.marker([55.6049, 13.0038]).addTo(map).bindPopup("Malmö");
    L.marker([63.8258, 20.2630]).addTo(map).bindPopup("Umeå");
});
