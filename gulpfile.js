'use strict';

let isDevelopment = true;
let gulpVars = require('./gulp.vars');
let webpackOptions = require('./gulp.webpack.config');
const $ = gulpVars.plugins;

$.gulp.task('styles', () => {
    let src = (!isDevelopment) ? [gulpVars.cssPath + 'lib-styles.styl', gulpVars.stylusPath + 'app.styl'] : gulpVars.stylusPath + 'app.styl';

    return $.gulp.src(src)
        .pipe($.plumber({
            errorHandler: $.notify.onError(err => ({
                title:   'Styles',
                message: err.message
            }))
        }))
        .pipe($.gulpIf(isDevelopment, $.sourcemaps.init()))
        .pipe($.stylus({
            'include css': true
        }))
        .pipe($.gulpIf(isDevelopment, $.sourcemaps.write()))
        .pipe($.gulpIf(!isDevelopment, $.combine($.concat('/app.css'), $.cssnano(), $.rev())))
        .pipe($.gulp.dest(gulpVars.publicCssPath))
        .on('data', function(file) {
            if (!isDevelopment) {
                let excludedFiles = '{app.css,lib-styles.css,' + file.basename + '}';

                $.del([
                    gulpVars.publicCssPath + '*.css',
                    '!' + gulpVars.publicCssPath + excludedFiles
                 ]);
            }
        })
        .pipe($.gulpIf(
            !isDevelopment,
            $.combine(
                $.rev.manifest('public/rev-manifest.json', {
                    base: gulpVars.publicPath,
                    merge: true
                }),
                $.gulp.dest(gulpVars.publicPath)
            ))
        )
        .pipe($.notify("Styles Done!"));
});

$.gulp.task('lib-styles', () => {
    return $.gulp.src([
            gulpVars.cssPath + '/font-awesome.css',
            gulpVars.nm + '/bootstrap/dist/css/bootstrap.css',
            gulpVars.nm + '/bootstrap-select/dist/css/bootstrap-select.css',
            gulpVars.nm + '/magnific-popup/dist/magnific-popup.css',
            gulpVars.nm + '/jquery.mmenu/dist/jquery.mmenu.all.css',
            gulpVars.nm + '/hamburgers/dist/hamburgers.css',
        ])
        .pipe($.plumber({
            errorHandler: $.notify.onError(err => ({
                title:   'Styles',
                message: err.message
            }))
        }))
        .pipe($.gulpIf(isDevelopment, $.sourcemaps.init()))
        .pipe($.concat('lib-styles.css'))
        .pipe($.gulpIf(isDevelopment, $.sourcemaps.write()))
        .pipe($.gulp.dest(gulpVars.publicCssPath))
});

$.gulp.task('webpack', (callback) => {
    let firstBuildReady = false;

    function done(err, stats) {
        firstBuildReady = true;

        if (err) { // hard error, see https://webpack.github.io/docs/node.js-api.html#error-handling
            return;  // emit('error', err) in webpack-stream
        }

        $.gulplog[stats.hasErrors() ? 'error' : 'info'](stats.toString({
            colors: true
        }));
    }

    if (!isDevelopment) {
        webpackOptions.plugins.push(
            new $.UglifyJsPlugin({
                uglifyOptions: {
                    compress: {
                        warnings:     false,
                        drop_console: true,
                        unsafe:       true
                    }
                }
            }),
            new $.AssetsPlugin({
                filename: 'rev-manifest.json',
                path:      __dirname + '/public',
                processOutput(assets) {
                    for (let key in assets) {
                    assets[key + '.js'] = assets[key].js.slice(webpackOptions.output.publicPath.length);
                    delete assets[key];
                    }
                    return JSON.stringify(assets);
                }
            })
        );
    }

    return $.gulp.src(gulpVars.jsPath + 'app.js')
        .pipe($.plumber({
            errorHandler: $.notify.onError(err => ({
                title:   'Webpack',
                message: err.message
            }))
        }))
        .pipe($.named())
        .pipe($.webpackStream(webpackOptions, null, done))
        .pipe($.gulp.dest(gulpVars.publicJsPath))
        .on('data', function(file) {
            if (firstBuildReady) {
                callback();
            }

            if (!isDevelopment) {
                let excludedFiles = '{app.js,' + file.basename + '}';

                $.del([
                    gulpVars.publicJsPath + '*.js',
                    '!' + gulpVars.publicJsPath + excludedFiles
                ]);
            }
        })
        .pipe($.notify("JS Done!"));
});

$.gulp.task('dev',
    $.gulp.parallel(
        'styles',
        'lib-styles',
        'webpack',
        function() {
            $.gulp.watch(
                [
                    gulpVars.stylusPath + '**/*.styl'
                ],
                $.gulp.series('styles')
            );
        }
    )
);

$.gulp.task('deloldhashfiles', (done) => {
    $.jsonfile.readFile(gulpVars.publicPath + 'css.json', function(err, obj) {
        let prevFile;

        if (obj) {
            prevFile = obj['app.css'];
        } else {
            console.log(err);
        }

        $.del(gulpVars.publicCssPath + prevFile);
    });

    $.jsonfile.readFile(gulpVars.publicPath + 'webpack.json', function(err, obj) {
        let prevFile;

        if (obj) {
            prevFile = obj['app.js'];
        } else {
            console.log(err);
        }

        $.del(gulpVars.publicJsPath + prevFile);
    });

    done();
});

$.gulp.task('prod', $.gulp.series(changeNodeEnv, 'webpack', 'styles'));

function changeNodeEnv(done) {
    isDevelopment = false;
    webpackOptions.output.filename = isDevelopment ? '[name].js' : '[name]-[chunkhash:10].js';
    webpackOptions.watch = isDevelopment;
    webpackOptions.devtool = isDevelopment ? 'cheap-module-inline-source-map' : false;
    done();
}