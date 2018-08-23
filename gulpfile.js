const { series, parallel, src, dest } = require('gulp');

var del       = require('del');
var rename    = require('gulp-rename');
var uglify    = require('gulp-uglify');
var merge     = require('merge-stream');
var minifyCss = require('gulp-minify-css');
var replace   = require('gulp-replace');

var paths = [
    {
        dest: 'assets/control-geocoder',
        js:   'Control.Geocoder.js',
        css:  'Control.Geocoder.css'
    },
    {
        dest: 'assets/leaflet-loading',
        js:   'Control.Loading.js',
        css:  'Control.Loading.css'
    },
    {
        dest: 'assets/leaflet-providers',
        js:   'leaflet-providers.js'
    },
    {
        dest: 'assets/leaflet',
        css:  'leaflet.css'
    },
    {
        dest: 'assets/leaflet-fullscreen',
        css:  'Control.FullScreen.css',
        js:   'Control.FullScreen.js'
    }
];

function clearStyles (cb) {
    var i, clear = [];

    for (i = 0; i < paths.length; i++) {
        if (paths[i].css) {
            clear.push(paths[i].dest + '/*.min.css');
        }
    }

    del(clear);

    cb();
}

function clearScripts (cb) {
    var i, clear = [];

    for (i = 0; i < paths.length; i++) {
        if (paths[i].js) {
            clear.push(paths[i].dest + '/*.min.js');
        }
    }

    del(clear);

    cb();
}

const scripts = series(clearScripts, function (cb) {
    var i, stream, streams = [];

    for (i = 0; i < paths.length; i++) {
        if (paths[i].js) {
            stream = src(paths[i].dest + '/' + paths[i].js)
                .pipe(rename(function (path) {
                    path.basename += '.min';
                }))
                .pipe(uglify())
                .pipe(dest(paths[i].dest));

            streams.push(stream);
        }
    }

    merge.call(null, streams);

    cb();
});

const styles = series(clearStyles, function (cb) {
    var i, stream, streams = [];

    for (i = 0; i < paths.length; i++) {
        if (paths[i].css) {
            stream = src(paths[i].dest + '/' + paths[i].css)
                .pipe(rename(function (path) {
                    path.basename += '.min';
                }))
                .pipe(minifyCss())
                .pipe(replace(/url\(([^"][^\)]+)\)/g, 'url(\'$1\')'))
                .pipe(dest(paths[i].dest));

            streams.push(stream);
        }
    }

    merge.call(null, streams);

    cb();
})

exports.scripts = scripts;
exports.styles  = styles;
exports.default = parallel(scripts, styles);
