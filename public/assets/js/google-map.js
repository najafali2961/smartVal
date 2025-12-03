// Wait for page to load
document.addEventListener("DOMContentLoaded", function () {

    // Center map on your real location (Lidköping)
    var map = L.map('map').setView([58.5035, 13.1570], 13);
    // zoom 13 = perfect for showing your area clearly

    // Free OpenStreetMap tiles (no API key needed!)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Add marker for your company
    L.marker([58.5035, 13.1570])
        .addTo(map)
        .bindPopup("<b>Smart-Val AB</b><br>Nylyckegatan 7D, 53141 Lidköping<br><a href='https://www.google.com/maps/search/?api=1&query=Nylyckegatan+7D+53141+Lidköping' target='_blank'>Open in Google Maps</a>")
        .openPopup();

});
