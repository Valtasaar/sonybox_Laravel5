'use strict';

/*const path = require('path');
//const del = require('del');
const gulp = require('gulp');
const gulplog = require('gulplog');
const combine = require('stream-combiner2').obj;
//const throttle = require('lodash.throttle');
const debug = require('gulp-debug');
const sourcemaps = require('gulp-sourcemaps');
const stylus = require('gulp-stylus');
//const browserSync = require('browser-sync').create();
const gulpIf = require('gulp-if');
const cssnano = require('gulp-cssnano');
const rev = require('gulp-rev');
//const revReplace = require('gulp-rev-replace');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const uglify = require('gulp-uglify');
//const resolver = require('stylus').resolver;
const webpackStream = require('webpack-stream');
const webpack = webpackStream.webpack;
const named = require('vinyl-named');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const ConcatPlugin  = require('webpack-concat-plugin');
const concat = require('gulp-concat');*/

let isDevelopment = true;
let gulpVars = require('./gulp.vars');
let webpackOptions = require('./gulp.webpack.config');
const $ = gulpVars.plugins;

$.gulp.task('styles', function() {

    return gulp.src('frontend/styles/index.styl')
        .pipe($.plumber({
            errorHandler: $.notify.onError(err => ({
                title:   'Styles',
                message: err.message
            }))
        }))
        .pipe($.gulpIf(isDevelopment, $.sourcemaps.init()))
        .pipe($.stylus({
            define: {
                url: resolver()
            }
        }))
        .pipe($.gulpIf(isDevelopment, $.sourcemaps.write()))
        .pipe($.gulpIf(!isDevelopment, $.combine($.cssnano(), $.rev())))
        .pipe($.gulp.dest('public/styles'))
        .pipe($.gulpIf(!isDevelopment, $.combine($.rev.manifest('css.json'), $.gulp.dest('manifest'))));

});

$.gulp.task('webpack', function(callback) {
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
        .on('data', function() {
            if (firstBuildReady) {
                callback();
            }
        });
});

$.gulp.task('prod', $.gulp.series(changeNodeEnv, 'webpack'));

function changeNodeEnv(done) {
    isDevelopment = false;
    webpackOptions.output.filename = isDevelopment ? '[name].js' : '[name]-[chunkhash:10].js';
    webpackOptions.watch = isDevelopment;
    webpackOptions.devtool = isDevelopment ? 'cheap-module-inline-source-map' : false;
    done();
}