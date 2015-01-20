var gulp      = require('gulp');
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

gulp.task('clear-styles', function(cb) {
    var i, clear = [];
    
    for (i = 0; i < paths.length; i++) {
        if (paths[i].css) {
            clear.push(paths[i].dest + '/*.min.css');
        }
    }

    del(clear, cb);
});

gulp.task('clear-scripts', function(cb) {
    var i, clear = [];

    for (i = 0; i < paths.length; i++) {
        if (paths[i].js) {
            clear.push(paths[i].dest + '/*.min.js');
        }
    }

    del(clear, cb);
});

gulp.task('scripts', ['clear-scripts'], function() {
    var i, stream, streams = [];

    for (i = 0; i < paths.length; i++) {
        if (paths[i].js) {
            stream = gulp.src(paths[i].dest + '/' + paths[i].js)
                .pipe(rename(function (path) {
                    path.basename += '.min';
                }))
                .pipe(uglify())
                .pipe(gulp.dest(paths[i].dest));

            streams.push(stream);
        }
    }

    return merge.call(null, streams);
});

gulp.task('styles', ['clear-styles'], function() {
    var i, stream, streams = [];

    for (i = 0; i < paths.length; i++) {
        if (paths[i].css) {
            stream = gulp.src(paths[i].dest + '/' + paths[i].css)
                .pipe(rename(function (path) {
                    path.basename += '.min';
                }))
                .pipe(minifyCss())
                .pipe(replace(/url\(([^"][^\)]+)\)/g, 'url(\'$1\')'))
                .pipe(gulp.dest(paths[i].dest));

            streams.push(stream);
        }
    }

    return merge.call(null, streams);
});

gulp.task('default', ['scripts', 'styles']);
