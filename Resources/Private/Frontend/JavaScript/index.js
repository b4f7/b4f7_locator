'use strict';

import L from 'leaflet';

import 'leaflet/dist/leaflet.css';

document.addEventListener('DOMContentLoaded', () => {
  const mapContainer = document.querySelector('#tx-b4f7locator--map');

  if (mapContainer) {
    let map = L.map('tx-b4f7locator--map', {
      center: [51.505, -0.09],
      zoom: 13,
    });
  }
});
