<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Dar Es Salaam Data Example</title>

<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
<script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.css' rel='stylesheet' />

<style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style>
</head>
<body>
<style>
#map-ui {
    position: absolute;
    top: 75px;
    left: 10px;
    list-style: none;
    margin: 0;
    padding: 0;
    z-index: 100;
}

#map-ui a {
    font: normal 13px/18px 'Helvetica Neue', Helvetica, sans-serif;
    background: #FFF;
    color: #3C4E5A;
    display: block;
    margin: 0;
    padding: 0;
    border: 1px solid #BBB;
    border-bottom-width: 0;
    min-width: 138px;
    padding: 10px;
    text-decoration: none;
}

#map-ui a:hover {
    background: #ECF5FA;
}

#map-ui li:last-child a {
    border-bottom-width: 1px;
    -webkit-border-radius: 0 0 3px 3px;
    border-radius: 0 0 3px 3px;
}

#map-ui li:first-child a {
    -webkit-border-radius: 3px 3px 0 0;
    border-radius: 3px 3px 0 0;
}

#map-ui a.active {
    background: #3887BE;
    border-color: #3887BE;
    border-top-color: #FFF;
    color: #FFF;
}
</style>
<ul id='map-ui'></ul>
<div id='map'></div>
<script>
var map = L.map('map').setView([-6.8191,39.2967], 13);
var ui = document.getElementById('map-ui');

addLayer(L.mapbox.tileLayer('markiliffe.map-2yitmcy5'), 'Base Map', 1);
addLayer(L.mapbox.tileLayer('markiliffe.gqd3rmso'), 'Aerial Imagery', 2);
addLayer(L.mapbox.tileLayer('markiliffe.hif3whfr'), 'Buildings', 3);
/*addLayer(L.tileLayer.wms('http://localhost:4567/geoserver/geonode/ows', {
	layers: 'geonode:buildings',
	transparent: true,
	format: 'image/png'
}),'Buildings WMS',4); */


function addLayer(layer, name, zIndex) {
    layer
        .setZIndex(zIndex)
        .addTo(map);

    // Create a simple layer switcher that toggles layers on
    // and off.
    var item = document.createElement('li');
    var link = document.createElement('a');

    link.href = '#';
    link.className = 'active';
    link.innerHTML = name;

    link.onclick = function(e) {
        e.preventDefault();
        e.stopPropagation();

        if (map.hasLayer(layer)) {
            map.removeLayer(layer);
            this.className = '';
        } else {
            map.addLayer(layer);
            this.className = 'active';
        }
    };

    item.appendChild(link);
    ui.appendChild(item);
}
</script>
</body>
</html>