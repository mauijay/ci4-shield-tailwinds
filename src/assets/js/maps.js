// src/assets/maps.js

// Initialize the map and set its view to Honolulu
const map = L.map('map').setView([21.3069, -157.8583], 13);

// Add OpenStreetMap tiles
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

// Add a marker for Honolulu
L.marker([21.3069, -157.8583])
  .addTo(map)
  .bindPopup('Honolulu, HI')
  .openPopup();
