// Map initialization
var map = L.map('map').setView([-7.365796, 109.902226], 11);

var centerPoint = [-7.365796, 109.902226];

//=============BASELAYERS============
var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            });

var Light_BL = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png', {
	maxZoom: 20,
	attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>'
});

var Dark_BL = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
	maxZoom: 20,
	attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>'
});

var ESRI = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'ESRI WorldImagery'
});
map.addLayer(osm);
map.getPane('tooltipPane').style.display = 'none';

//=========BASEMAPS=============

$("#basemaps-esri").click(function () {
    map.addLayer(ESRI);
    $(".basemaps").removeClass("active");
    $(this).addClass("active");
    $(".leaflet-tooltip").css("color", "#ffffff");
});
$("#basemaps-light").click(function () {
    map.addLayer(Light_BL);
    $(".basemaps").removeClass("active");
    $(this).addClass("active");
    $(".leaflet-tooltip").css("color", "#000000");
});
$("#basemaps-dark").click(function () {
    map.addLayer(Dark_BL);
    $(".basemaps").removeClass("active");
    $(this).addClass("active");
    $(".leaflet-tooltip").css("color", "#ffffff");
});
$("#OpenStreet-Map").click(function () {
    map.addLayer(osm);
    $(".basemaps").removeClass("active");
    $(this).addClass("active");
    $(".leaflet-tooltip").css("color", "#ffffff");
});



// Marker
var myIcon = L.icon({
    iconUrl: '../assets/map/images/pngegg.png',
    iconSize: [40, 40],
});


// Markup
var marker = L.marker([-7.015796, 109.902226], {icon: myIcon});
var popup = marker.bindPopup('Wonosobo').openPopup()
popup.addTo(map);

//layer controller
var baseMaps = {
    "OSM": osm,
    "StadiaMaps": Light_BL,
    "StadiaDark": Dark_BL,
    "ESRI": ESRI
};

//INPUT WARNA KECAMATAN
function getColor(d) {
    return d == "Garung"  ? '#BD0026' :
           d == "Kalibawang"   ? '#FD8D3C' :
           d == "Kalikajar"   ? '#FEB24C' :
           d == "Kaliwiro"   ? '#FED976' :
           d == "Kejajar"  ? '#BD0026' :
           d == "Kepil"  ? '#FC4E2A' :
           d == "Kertek"   ? '#FD8D3C' :
           d == "Leksono"   ? '#FED976' :
           d == "Mojotengah"  ? '#E31A1C' :
           d == "Sapuran"  ? '#BD0026' :
           d == "Selomerto"  ? '#E31A1C' :
           d == "Sukoharjo"   ? '#FD8D3C' :
           d == "Wadaslintang"   ? '#FED976' :
           d == "Watumalang"   ? '#FD8D3C' :
           d == "Wonosobo"   ? '#FED976' :
                      '#AED';
}

//STYLE ADMINISTRASI 
function style(feature) {
    return {
        fillColor: getColor(feature.properties.KECAMATAN),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    };
}

//ONEACHFEATURE
function highlightFeature(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 4,
        color: '#FFF',
        dashArray: '',
        fillOpacity: 0.7
    });

    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }
    info.update(layer.feature.properties);
}

//ZOOM LAYER ADMINISTRASI
function zoomToFeature(e) {
    map.fitBounds(e.target.getBounds());
}

//RESET LAYER ADMINISTRASI
var geojson = L.geoJson(administrasi, {
    style: style,
    onEachFeature: onEachFeature
})

function resetHighlight(e) {
    geojson.resetStyle(e.target);
    info.update();
}

function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
        click: zoomToFeature
    });
}


//INFO ADMINISTRASI
var info = L.control();

info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
    this.update();
    return this._div;
};

// method that we will use to update the control based on feature properties passed
info.update = function (props) {
    this._div.innerHTML = '<h5>INFORMASI</h5>' +  (props ?
        'Kecamatan : '+
        '<b>' + props.KECAMATAN + '</b>' + '<br>' +
        'Jumlah Penduduk : '+
        '<b>' + props.PENDUDUK + ' Jiwa</b>' + '<br>' +
        'Luas Wilayah : '+
        '<b>' + props.LUAS + ' Km<sup>2</sup></b>'
        : 'Kecamatan...');
};

info.addTo(map);


//LAYER ADMINISTRASI
var administrasi = L.geoJson(administrasi, {
    style: style,
    onEachFeature: onEachFeature
}).addTo(map);

//STYLE ADMINISTRASI 
function warna(feature) {
    return {
        fillColor: getColor(feature.properties.skor),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    };
}

var penggunaanlahan = L.geoJson(penggunaanlahan, {
    style: warna,
});

var overlayMaps = {
    "Administrasi": administrasi,
    "Penggunaan Lahan": penggunaanlahan 
}

// Sidebar
var sidebar = L.control.sidebar({
    autopan: true,       // whether to maintain the centered map point when opening the sidebar
    closeButton: true,    // whether t add a close button to the panes
    container: 'sidebar', // the DOM container or #ID of a predefined sidebar container that should be used
    position: 'left',     // left or right
}).addTo(map);

//======================================

// Control Layer
L.control.layers(baseMaps, overlayMaps).addTo(map);

// menambahkan tools defautl extent
L.control.defaultExtent().addTo(map);