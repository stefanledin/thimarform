const path = require('path');

module.exports = {
    mode: 'development',
    entry: './assets/js/src/app.js',
    output: {
        filename: 'app.js',
        path: path.resolve(__dirname, 'assets/js/dist')
    }
}