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
    'version'    => '0.7.3',
    'license'    => '<a href="https://github.com/Leaflet/Leaflet/blob/master/LICENSE" target="_blank">BSD-2-Clause</a>',
    'homepage'   => 'http://leafletjs.com',
    'css'        => 'assets/leaflet/libs/leaflet/leaflet.css',
    'javascript' => 'assets/leaflet/libs/leaflet/leaflet.js',
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-providers'] = array
(
    'name'       => 'Leaflet-providers',
    'version'    => '1.0.12',
    'license'    => '<a href="https://github.com/leaflet-extras/leaflet-providers/blob/master/license.md" target="_blank">BSD-2-Clause</a>',
    'homepage'   => 'http://leaflet-extras.github.io/leaflet-providers',
    'javascript' => 'assets/leaflet/libs/leaflet-providers/leaflet-providers.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-ajax'] = array
(
    'name'       => 'Leaflet-ajax',
    'version'    => '1.1.0',
    'license'    => '<a href="https://github.com/calvinmetcalf/leaflet-ajax/blob/master/license.md" target="_blank">MIT</a>',
    'homepage'   => 'https://github.com/calvinmetcalf/leaflet-ajax',
    'javascript' => 'assets/leaflet/libs/leaflet-ajax/leaflet.ajax.min.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-loading'] = array
(
    'name'       => 'Leaflet.loading',
    'version'    => '0.1.13',
    'license'    => '<a href="https://github.com/ebrelsford/Leaflet.loading/blob/master/LICENSE" target="_blank">MIT</a>',
    'homepage'   => 'https://github.com/ebrelsford/Leaflet.loading',
    'css'        => 'assets/leaflet/libs/leaflet-loading/Control.Loading.css',
    'javascript' => 'assets/leaflet/libs/leaflet-loading/Control.Loading.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['leaflet-control-geocode'] = array
(
    'name'       => 'Leaflet Control Geocoder',
    'version'    => '1.0.0',
    'license'    => '<a href="https://github.com/perliedman/leaflet-control-geocoder/blob/master/LICENSE" target="_blank">BSD-2-Clause</a>',
    'homepage'   => 'https://github.com/perliedman/leaflet-control-geocoder',
    'css'        => 'assets/leaflet/libs/control-geocoder/Control.Geocoder.css',
    'javascript' => 'assets/leaflet/libs/control-geocoder/Control.Geocoder.js'
);

$GLOBALS['LEAFLET_LIBRARIES']['spin.js'] = array
(
    'name'       => 'spin.js',
    'version'    => '2.0.2',
    'license'    => '<a href="https://github.com/fgnass/spin.js/blob/master/LICENSE.txt" target="_blank">MIT</a>',
    'homepage'   => 'http://fgnass.github.io/spin.js',
    'javascript' => 'assets/leaflet/libs/spin-js/spin.min.js'
);
