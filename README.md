
Libraries for Leaflet integration into Contao CMS
=================================================

[![Version](http://img.shields.io/packagist/v/netzmacht/contao-leaflet-libraries.svg?style=flat-square)](http://packagist.com/packages/netzmacht/contao-leaflet-libraries)
[![License](http://img.shields.io/packagist/l/netzmacht/contao-leaflet-libraries.svg?style=flat-square)](http://packagist.com/packages/netzmacht/contao-leaflet-libraries)
[![Downloads](http://img.shields.io/packagist/dt/netzmacht/contao-leaflet-libraries.svg?style=flat-square)](http://packagist.com/packages/netzmacht/contao-leaflet-libraries)

This package is just a bundle of leaflet libraries required by 
[netzmacht/contao-leaflet-maps](https://github.com/netzmacht/contao-leaflet-maps) - the Leaflet maps integration into
Contao CMS.

This package contains following packages:

 - [leaflet 1.1.0](http://leafletjs.com)
 - [Leaflet-providers 1.1.15](http://leaflet-extras.github.io/leaflet-providers)
 - [Leaflet.markercluster 1.0.2](https://github.com/Leaflet/Leaflet.markercluster)
 - [Leaflet-omnivore 0.3.4](https://github.com/mapbox/leaflet-omnivore)
 - [Leaflet.loading 0.1.24](https://github.com/ebrelsford/Leaflet.loading)
 - [Leaflet.Control.FullScreen 1.4.3](https://github.com/brunob/leaflet.fullscreen)
 - [Leaflet Control Geocoder 1.5.4](https://github.com/perliedman/leaflet-control-geocoder)
 - [Leaflet.ExtraMarkers 1.0.6](https://github.com/coryasilva/Leaflet.ExtraMarkers)
 - [osmtogeojson 2.2.12](https://github.com/tyrasd/osmtogeojson)
 - [spin.js 2.3.2](http://fgnass.github.io/spin.js)


Install
-------

You can install this package via composer. 

```
$ php composer.phar require netzmacht/contao-leaflet-libraries:~1.0 
```

If you use Contao 4 without the managed edition, you also have to register the module as a bundle.

```php
<?php

  // Dependency is automatically installed and has to be registered
  new Contao\CoreBundle\HttpKernel\Bundle\ContaoModuleBundle('leaflet-libs', $this->getRootDir()),
```  

Version numbers
---------------

Each release has is tagged with the main leaflet version which is shipped with this bundle. For any bugfix release which 
is created without shipping a newer version of leaflet, this package uses four parts of the version number.

License
-------

As this package is just a meta package to provide the libraries, the licenses of each library have to be accepted. They
are unter the MIT or BSD license. 
