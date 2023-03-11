'use strict';

import L from 'leaflet';

import 'leaflet/dist/leaflet.css';

document.addEventListener('DOMContentLoaded', () => {
  let map = L.map('tx_b4f7locator_map', {
    center: [51.505, -0.09],
    zoom: 13,
  });
});
