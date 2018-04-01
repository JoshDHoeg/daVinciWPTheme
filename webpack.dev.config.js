const path = require("path");

const HtmlWebpackPlugin = require("html-webpack-plugin");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const CleanWebpackPlugin = require('clean-webpack-plugin');

const extractVendorStyles = new ExtractTextPlugin('dist/vendor.css');
const extractAppStyles = new ExtractTextPlugin('./[name].css');

const PATHS = {
  app: path.join(__dirname, "src/index.js"),
  build: path.join(__dirname, "src/dist"),
};

module.exports = {
  entry: {
    app: PATHS.app
  },
  output: {
    path: PATHS.build,
    filename: "[name].js",
  },
  devtool: 'source-map',
  module: {
    rules: [
      {
        test: /\.scss$/,
        include: [ path.resolve(__dirname, "src/styles") ],
        use: extractAppStyles.extract({
          use: [
            { loader: 'css-loader', options: { minimize: true } },
            { loader: 'sass-loader' }
          ],
          fallback: 'style-loader'
        })
      },
      {
        test: /\.css$/,
        use: extractVendorStyles.extract({
          use: [
            { loader: 'css-loader', options: { minimize: true } }
          ],
          fallback: 'style-loader'
        })
      },
      {
        test: /\.(ejs)$/,
        use: [ 'html-loader' ],
      },
      {
        test: /\.(png|svg|jpg|gif)$/,
        use: [ 'file-loader' ]
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        use: [ 'file-loader' ]
      }
    ],
  },
  devServer: {
    contentBase: './dist',
    port: 9000
  },
  plugins: [
    extractAppStyles,
    new CleanWebpackPlugin( `${PATHS.build}/*` )
  ],
};
