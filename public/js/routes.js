document.addEventListener('DOMContentLoaded', function() { //On check quand le HTML sera complètement chargé



  let geolocated = function(pos) { // Si l'utilisateur accepte la géolocalisation
    let currentLat = pos.coords.latitude;; //On récupère ses coordonnées
    let currentLong = pos.coords.longitude;
    var map = L.map('map'); //On initialise une map

    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
    
    L.Routing.control({
        waypoints: [ //ON ajoute les points de départ et d'arrivé
            L.latLng(currentLat, currentLong), //A partir de la position actuelle
            L.latLng(48.871900, 2.776623) //Jusqu'au point défini
        ],
        routeWhileDragging: true,
        language: 'fr'
    }).addTo(map);
  }

  let notGeolocated = function() { //Si l'utilisateur n'accepte pas la géolocalisation
    const map = L.map('map').setView([48.871900, 2.776623], 12); //On affiche une map centrée sur le parc
    const mainLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiemFyYXRjaHkiLCJhIjoiY2tpeDZ4b242M29objJxbGJiNXNweDh2biJ9.y1Hh5jIGyY4mjfLAeVoHEw'
    });
    mainLayer.addTo(map);
}

  navigator.geolocation.getCurrentPosition(geolocated, notGeolocated);

});