const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .less(
        "resources/less/app.less",
        "public/css"
    )
    .options({
        processCssUrls: false,
    });


mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.less$/,
                loader: 'less-loader',
                options: {
                    lessOptions: {
                        javascriptEnabled: true
                    }
                }
            }
        ]
    }
});