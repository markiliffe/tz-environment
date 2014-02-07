<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Dar Es Salaam Data Example</title>

<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
<script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.1/mapbox.css' rel='stylesheet' />


<style style type='text/css'>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }

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

 .my-legend .legend-title {
    text-align: left;
    margin-bottom: 5px;
    font-weight: bold;
    font-size: 90%;
    }
  .my-legend .legend-scale ul {
    margin: 0;
    margin-bottom: 5px;
    padding: 0;
    float: left;
    list-style: none;
    }
  .my-legend .legend-scale ul li {
    font-size: 80%;
    list-style: none;
    margin-left: 0;
    line-height: 18px;
    margin-bottom: 2px;
    }
  .my-legend ul.legend-labels li span {
    display: block;
    float: left;
    height: 16px;
    width: 30px;
    margin-right: 5px;
    margin-left: 0;
    border: 1px solid #999;
    }
  .my-legend .legend-source {
    font-size: 70%;
    color: #999;
    clear: both;
    }
  .my-legend a {
    color: #777;
    }
</style>
</head>

<body>

<div id='legend-content' style='display: none;'>

<div class='my-legend'>
  <div class='legend-title'>Flood Risk In Dar es Salaam</div>
  <div class='legend-scale'>
    <ul class='legend-labels'>
      <li><span style='background:#FF0000;'></span>Very High</li>
      <li><span style='background:#FFCC00;'></span>High</li>
      <li><span style='background:#FFFF00;'></span>Average</li>
      <li><span style='background:#DFFF00;'></span>Low</li>
      <li><span style='background:#00FF00;'></span>Very Low</li>
    </ul>
  </div>
  <div class='legend-source'>Source: <a href="http://www.dcc.go.tz/">City Council of Dar es Salaam</a></div>
 </div>
</div>

<style type='text/css'>
  .my-legend .legend-title {
    text-align: left;
    margin-bottom: 5px;
    font-weight: bold;
    font-size: 90%;
    }
  .my-legend .legend-scale ul {
    margin: 0;
    margin-bottom: 5px;
    padding: 0;
    float: left;
    list-style: none;
    }
  .my-legend .legend-scale ul li {
    font-size: 80%;
    list-style: none;
    margin-left: 0;
    line-height: 18px;
    margin-bottom: 2px;
    }
  .my-legend ul.legend-labels li span {
    display: block;
    float: left;
    height: 16px;
    width: 30px;
    margin-right: 5px;
    margin-left: 0;
    border: 1px solid #999;
    }
  .my-legend .legend-source {
    font-size: 70%;
    color: #999;
    clear: both;
    }
  .my-legend a {
    color: #777;
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
map.legendControl.addLegend(document.getElementById('legend-content').innerHTML);
    addLayer(L.tileLayer.wms('http://localhost:4567/geoserver/geonode/ows', {
	layers: 'geonode:buildings',
	transparent: true,
	format: 'image/png'
}),'Buildings WMS',4);


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