<?php

/*
 * Leaflet assets.
 *
 * The leaflet definition are aware of the required javascript libraries. Register the assets so that they are
 * loaded automatically.
 *
 * Each entry is an array of 2 values. The first is the resource. The second is a type. Supported types are:
 *  - url:    An valid url.
 *  - file:   An file path relative to the Contao Root.
 *  - source: Inline css/javascript.
 *
 * You don't have to define it as array if you simply add a file. Do not add |static and or media type flag to it.
 * It's getting added by default if not being in debug mode.
 */
$GLOBALS['LEAFLET_LIBRARIES']['leaflet'] = array
(
    'name'       => 'Leaflet',
    'version'    => '1.2.0',
    'license'    => '<a href="https://github.com/Leaflet/Leaflet/blob/master/LICENSE" target="_blank">BSD-2-Clause</a>',
    'homepage'   => 'http://leafletjs.com',
    'css'        => 'assets/leaflet/libs/leaflet/leaflet.min.css',
    'javascript' => 'assets/leaflet/libs/leaflet/leaflet-src.js',
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-providers'] = array
(
    'name'       => 'Leaflet-providers',
    'version'    => '1.1.17',
    'license'    => '<a href="https://github.com/leaflet-extras/leaflet-providers/blob/master/license.md" target="_blank">BSD-2-Clause</a>',
    'homepage'   => 'http://leaflet-extras.github.io/leaflet-providers',
    'javascript' => 'assets/leaflet/libs/leaflet-providers/leaflet-providers.min.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-markercluster'] = array
(
    'name'       => 'Leaflet.markercluster',
    'version'    => '1.0.6',
    'license'    => '<a href="https://github.com/Leaflet/Leaflet.markercluster/blob/master/MIT-LICENCE.txt" target="_blank">MIT</a>',
    'homepage'   => 'https://github.com/Leaflet/Leaflet.markercluster',
    'css'        => 'assets/leaflet/libs/leaflet-markercluster/MarkerCluster.css',
    'javascript' => 'assets/leaflet/libs/leaflet-markercluster/leaflet.markercluster.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-omnivore'] = array
(
    'name'       => 'Leaflet-omnivore',
    'version'    => '0.3.4',
    'license'    => '<a href="https://github.com/mapbox/leaflet-omnivore/blob/master/LICENSE" target="_blank">BSD</a>',
    'homepage'   => 'https://github.com/mapbox/leaflet-omnivore',
    'javascript' => 'assets/leaflet/libs/leaflet-omnivore/leaflet-omnivore.min.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-loading'] = array
(
    'name'       => 'Leaflet.loading',
    'version'    => '0.1.24',
    'license'    => '<a href="https://github.com/ebrelsford/Leaflet.loading/blob/master/LICENSE" target="_blank">MIT</a>',
    'homepage'   => 'https://github.com/ebrelsford/Leaflet.loading',
    'css'        => 'assets/leaflet/libs/leaflet-loading/Control.Loading.min.css',
    'javascript' => 'assets/leaflet/libs/leaflet-loading/Control.Loading.min.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-fullscreen'] = array
(
    'name'       => 'Leaflet.Control.FullScreen',
    'version'    => '1.4.3',
    'license'    => '<a href="https://github.com/brunob/leaflet.fullscreen/blob/master/LICENSE" target="_blank">MIT</a>',
    'homepage'   => 'https://github.com/brunob/leaflet.fullscreen',
    'css'        => 'assets/leaflet/libs/leaflet-fullscreen/Control.FullScreen.min.css',
    'javascript' => 'assets/leaflet/libs/leaflet-fullscreen/Control.FullScreen.min.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-control-geocoder'] = array
(
    'name'       => 'Leaflet Control Geocoder',
    'version'    => '1.5.5',
    'license'    => '<a href="https://github.com/perliedman/leaflet-control-geocoder/blob/master/LICENSE" target="_blank">BSD-2-Clause</a>',
    'homepage'   => 'https://github.com/perliedman/leaflet-control-geocoder',
    'css'        => 'assets/leaflet/libs/control-geocoder/Control.Geocoder.min.css',
    'javascript' => 'assets/leaflet/libs/control-geocoder/Control.Geocoder.min.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-extra-markers'] = array
(
    'name'       => 'Leaflet Extra Markers',
    'version'    => '1.0.6',
    'license'    => '<a href="https://github.com/coryasilva/Leaflet.ExtraMarkers/blob/master/LICENSE" target="_blank">MIT</a>',
    'homepage'   => 'https://github.com/coryasilva/Leaflet.ExtraMarkers',
    'css'        => 'assets/leaflet/libs/leaflet-extra-markers/css/leaflet.extra-markers.min.css',
    'javascript' => 'assets/leaflet/libs/leaflet-extra-markers/js/leaflet.extra-markers.min.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['osmtogeojson'] = array
(
    'name'       => 'osmtogeojson',
    'version'    => '2.2.12',
    'license'    => '<a href="https://github.com/tyrasd/osmtogeojson/blob/gh-pages/LICENSE" target="_blank">MIT</a>',
    'homepage'   => 'https://github.com/tyrasd/osmtogeojson',
    'javascript' => 'assets/leaflet/libs/osmtogeojson/osmtogeojson.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['spin.js'] = array
(
    'name'       => 'spin.js',
    'version'    => '2.3.2',
    'license'    => '<a href="https://github.com/fgnass/spin.js/blob/master/LICENSE.txt" target="_blank">MIT</a>',
    'homepage'   => 'http://fgnass.github.io/spin.js',
    'javascript' => 'assets/leaflet/libs/spin-js/spin.min.js'
);
