let publicPath = 'public/',
    assetsPath = 'resources/assets/';

const webpackStream = require('webpack-stream');

module.exports = {
    publicPath: publicPath,
    publicCssPath: publicPath + 'css/',
    publicJsPath: publicPath + 'js/',
    assetsPath: assetsPath,
    stylusPath: assetsPath + 'stylus/',
    jsPath: assetsPath + 'js/',
    cssPath: assetsPath + 'css/',
    nm: './node_modules',

    plugins: {
        path: require('path'),
        gulp: require('gulp'),
        gulplog: require('gulplog'),
        combine: require('stream-combiner2').obj,
        debug: require('gulp-debug'),
        sourcemaps: require('gulp-sourcemaps'),
        stylus: require('gulp-stylus'),
        gulpIf: require('gulp-if'),
        cssnano: require('gulp-cssnano'),
        rev: require('gulp-rev'),
        plumber: require('gulp-plumber'),
        notify: require('gulp-notify'),
        uglify: require('gulp-uglify'),
        webpackStream: webpackStream,
        webpack: webpackStream.webpack,
        named: require('vinyl-named'),
        UglifyJsPlugin: require('uglifyjs-webpack-plugin'),
        concat: require('gulp-concat'),
        AssetsPlugin: require('assets-webpack-plugin'),
        del: require('del'),
        jsonfile: require('jsonfile')
    }
};

