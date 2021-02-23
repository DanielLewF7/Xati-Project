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
        .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
            .setHTML('<h3>' + marker.properties.title + '</h3><p>' + marker.properties.description + '</p>'))
        .addTo(map);
});