//const path = require('path');
const webpackStream = require('webpack-stream');
const webpack = webpackStream.webpack;
let isDevelopment = true;

let gulpVars = require('./gulp.vars');

module.exports = {
    output: {
        publicPath: gulpVars.publicJsPath,
        filename: isDevelopment ? '[name].js' : '[name]-[chunkhash:10].js'
    },
    watch:   isDevelopment,
    devtool: isDevelopment ? 'cheap-module-inline-source-map' : false,
    module:  {
        rules: [
            {
                test:    /\.js$/,
                include: gulpVars.plugins.path.join(__dirname, gulpVars.jsPath),
                loader: "babel-loader",
                options: {
                    presets: [
                        ["es2015"]
                    ]
                }
            },
            {
                test: /\.vue$/,
                loader: 'vue-loader',
            }
        ]
    },
    resolve: {
        alias: {
            vue: 'vue/dist/vue.common.js'
        }
    },
    plugins: [
        new webpack.NoEmitOnErrorsPlugin()
    ]
};