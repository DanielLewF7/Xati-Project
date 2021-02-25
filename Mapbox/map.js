mapboxgl.accessToken = 'pk.eyJ1IjoiZGFuaWVsbGV3IiwiYSI6ImNrbGNiczdvODBmZ28ycG1qMnRxbXczZWQifQ.kUOlFF3IvbSGnq4EydokGA';
var map = new mapboxgl.Map({
    container: 'map',
    center: ([9.993682, 53.551086]),
    zoom: 5,
    style: 'mapbox://styles/daniellew/cklcesja92byg17mopotfnduc'
});

var pulse = $(".MapPulse");
pulse.ready(function () {
    pulse.animate({
        left: '+=500px',
    }, 1500);
});
var geojson = {
    type: 'FeatureCollection',
    features: [{
        type: 'Feature',
        geometry: {
            type: 'Point',
            coordinates: [10.026099, 53.575569]
        },
        properties: {
            title: 'F7 Media GmbH',
            description: 'my 1 year work experience as a Frontend Developer'
        }
    },
        {
            type: 'Feature',
            geometry: {
                type: 'Point',
                coordinates: [17.659711, 50.385332]
            },
            properties: {
                title: 'Biała, Poland',
                description: 'My Hometown where my family is from'
            }
        }]
};
geojson.features.forEach(function(marker) {

    var el = document.createElement('div');
    el.className = 'marker';

    new mapboxgl.Marker(el)
        .setLngLat(marker.geometry.coordinates)
        .addTo(map);
    new mapboxgl.Marker(el)
        .setLngLat(marker.geometry.coordinates)
        .setPopup(new mapboxgl.Popup({ offset: 25 })
            .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
        .addTo(map);
});

var canvas = map.getCanvasContainer();
var start = [10.148076, 53.526815];
function getRoute(end) {
    var start = [10.148076, 53.526815];
    var url = 'https://api.mapbox.com/directions/v5/mapbox/driving/' + start[0] + ',' + start[1] + ';' + end[0] + ',' + end[1] + '?steps=true&geometries=geojson&access_token=' + mapboxgl.accessToken;

    var req = new XMLHttpRequest();
    req.open('GET', url, true);
    req.onload = function() {
        var json = JSON.parse(req.response);
        var data = json.routes[0];
        var route = data.geometry.coordinates;
        var geojson = {
            type: 'Feature',
            properties: {},
            geometry: {
                type: 'LineString',
                coordinates: route,
            }
        };
        if (map.getSource('route')) {
            map.getSource('route').setData(geojson);
        } else { // otherwise, make a new request
            map.addLayer({
                id: 'route',
                type: 'line',
                source: {
                    type: 'geojson',
                    data: {
                        type: 'Feature',
                        properties: {},
                        geometry: {
                            type: 'LineString',
                            coordinates: geojson
                        }
                    }
                },
                layout: {
                    'line-join': 'round',
                    'line-cap': 'round'
                },
                paint: {
                    'line-color': '#FFE926',
                    'line-width': 5,
                    'line-opacity': 0.75
                }
            });
        }
        var instructions = document.getElementById('instructions');
        var steps = data.legs[0].steps;

        var tripInstructions = [];
        for (var i = 0; i < steps.length; i++) {
            tripInstructions.push('<br><li>' + steps[i].maneuver.instruction) + '</li>';
            instructions.innerHTML = '<br><span class="duration">Trip duration: ' + Math.floor(data.duration / 60) + ' min </span>' + tripInstructions;
        }
    };
    req.send();
}

map.on('load', function() {

    getRoute(start);

    // Add starting point to the map
    map.addLayer({
        id: 'point',
        type: 'circle',
        source: {
            type: 'geojson',
            data: {
                type: 'FeatureCollection',
                features: [{
                    type: 'Feature',
                    properties: {},
                    geometry: {
                        type: 'Point',
                        coordinates: start
                    }
                }]
            }
        },
        paint: {
            'circle-radius': 12,
            'circle-color': '#fff'
        }
    });
    map.on('click', function(e) {
        var coordsObj = e.lngLat;
        canvas.style.cursor = '';
        var coords = Object.keys(coordsObj).map(function(key) {
            return coordsObj[key];
        });
        var end = {
            type: 'FeatureCollection',
            features: [{
                type: 'Feature',
                properties: {},
                geometry: {
                    type: 'Point',
                    coordinates: coords
                }
            }]
        };
        if (map.getLayer('end')) {
            map.getSource('end').setData(end);
        } else {
            map.addLayer({
                id: 'end',
                type: 'circle',
                source: {
                    type: 'geojson',
                    data: {
                        type: 'FeatureCollection',
                        features: [{
                            type: 'Feature',
                            properties: {},
                            geometry: {
                                type: 'Point',
                                coordinates: coords
                            }
                        }]
                    }
                },
                paint: {
                    'circle-radius': 10,
                    'circle-color': '#f30'
                }
            });
        }
        getRoute(coords);
    });
});
