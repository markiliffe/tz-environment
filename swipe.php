<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Swipe Layers</title>

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
#range {
  width: 100%;
  position: absolute;
}
.leaflet-top .leaflet-control-zoom {
  margin-top: 20px;
}
</style>

<div id='map'></div>
<input id="range" type="range" min="0" max="1.0" step="any" style="width: 100%; position: absolute" />
<script>
    var map = L.mapbox.map('map');

    L.mapbox.tileLayer('markiliffe.gqd3rmso').addTo(map);
    var overlay = L.mapbox.tileLayer('markiliffe.daladala').addTo(map);

    var range = document.getElementById('range');

    function clip() {
        var nw = map.containerPointToLayerPoint([0, 0]),
            se = map.containerPointToLayerPoint(map.getSize()),
            clipX = nw.x + (se.x - nw.x) * range.value;

        overlay.getContainer().style.clip = 'rect(' + [nw.y, clipX, se.y, nw.x].join('px,') + 'px)';
    }

    range['oninput' in range ? 'oninput' : 'onchange'] = clip;
    map.on('move', clip);

    map.setView([-6.8191,39.2967], 13);

</script>
</body>
</html>