
Libraries for Leaflet integration into Contao CMS
=================================================

[![Version](http://img.shields.io/packagist/v/netzmacht/contao-leaflet-libraries.svg?style=flat-square)](http://packagist.com/packages/netzmacht/contao-leaflet-libraries)
[![License](http://img.shields.io/packagist/l/netzmacht/contao-leaflet-libraries.svg?style=flat-square)](http://packagist.com/packages/netzmacht/contao-leaflet-libraries)
[![Downloads](http://img.shields.io/packagist/dt/netzmacht/contao-leaflet-libraries.svg?style=flat-square)](http://packagist.com/packages/netzmacht/contao-leaflet-libraries)

This package is just a bundle of leaflet libraries required by 
[netzmacht/contao-leaflet-maps](https://github.com/netzmacht/contao-leaflet-maps) - the Leaflet maps integration into
Contao CMS.

This package contains following packages:

 - [leaflet 0.7.7](http://leafletjs.com)
 - [Leaflet-providers 1.1.5](http://leaflet-extras.github.io/leaflet-providers)
 - [Leaflet.markercluster 0.4.0](https://github.com/Leaflet/Leaflet.markercluster)
 - [Leaflet-omnivore 0.3.2](https://github.com/mapbox/leaflet-omnivore)
 - [Leaflet.loading 0.1.15](https://github.com/ebrelsford/Leaflet.loading)
 - [Leaflet.Control.FullScreen 1.1.4](https://github.com/brunob/leaflet.fullscreen)
 - [Leaflet Control Geocoder 1.0.0](https://github.com/perliedman/leaflet-control-geocoder)
 - [spin.js 2.0.2](http://fgnass.github.io/spin.js)


Install
-------

You can install this package via composer. 

```
$ php composer.phar require netzmacht/contao-leaflet-libraries:~0.7 
```

When releasing the first stable version of
[netzmacht/contao-leaflet-maps](https://github.com/netzmacht/contao-leaflet-maps) the version number gonna be the same
as the included leaflet library.

License
-------

As this package is just a meta package to provide the libraries, the licenses of each library have to be accepted. They
are unter the MIT or BSD license. 
