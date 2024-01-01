<?php

use Botble\Shortcode\View\View;
use Botble\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function(Theme $theme)
        {
            // You may use this event to set up your assets.
            // $theme->asset()->usePath()->add('core', 'core.js');
            // $theme->asset()->add('jquery', 'vendor/jquery/jquery.min.js');
            // $theme->asset()->add('jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', ['jquery']);
            // // customize
            $theme
                ->asset()
                ->usePath()->add('0-87815c735e7642af54551b08b9784e99f9c59104-css', 'css/wp-content/cache/fvm/min/www.portotheme.com/0-87815c735e7642af54551b08b9784e99f9c59104.min.css')
                ->usePath()->add('0-5b52ee30bff693f610a3f6f064a7442604981574.min-css', 'css/wp-content/cache/fvm/min/www.portotheme.com/0-0-5b52ee30bff693f610a3f6f064a7442604981574.min.min.css')
                ->usePath()->add('style-css', 'css/style.css')
                // // preload
                // ->usePath()->add('cache-01-css', 'css/cache/cache-01.css')
                // // ->usePath()->add('porto.woff2', 'css/fonts/porto-font/porto.woff2')
                // // ->usePath()->add('fa-solid-900.woff2', 'css/fonts/fontawesome_optimized/fa-solid-900.woff2')
                // ->usePath()->add('cache-02-css', 'css/cache/cache-02.css')
                ;

            // $theme
            //     ->asset()
            //     ->container('footer')
            //     ->usePath()->add('jquery-core-js', 'js/jquery/jquery.min.js')
            //     ->usePath()->add('jquery-migrate-js', 'js/jquery/jquery-migrate.min.js')
            //     ->usePath()->add('jquery.blockUI.min-js', 'js/plugins/jquery-blockui/jquery.blockUI.min.js')
            //     ->usePath()->add('wc-add-to-cart-js', 'js/plugins/frontend/add-to-cart.min.js')
            //     ->usePath()->add('vc_woocommerce-add-to-cart-js', 'js/vendors/woocommerce-add-to-cart.js')
            //     ;

            //  $theme
            //     ->asset()
            //     ->usePath()->add('style-css', 'css/style.css')
            //     // ->usePath()->add('bootstrap-css', 'vendor/bootstrap/css/bootstrap.min.css')
            //     ->usePath()->add('font-awesome-css', 'vendor/fontawesome-free/css/all.min.css')
            //     ->usePath()->add('animate-css', 'vendor/animate/animate.min.css')
            //     ->usePath()->add('simple-line-icons-css', 'vendor/simple-line-icons/css/simple-line-icons.min.css')
            //     ->usePath()->add('owl-carousel-css', 'vendor/owl.carousel/assets/owl.carousel.min.css')
            //     ->usePath()->add('owl-default-css', 'vendor/owl.carousel/assets/owl.theme.default.min.css')
            //     ->usePath()->add('magnific-popup-css', 'vendor/magnific-popup/magnific-popup.min.css');

            // // $theme
            // //     ->asset()
            // //     ->usePath()->add('theme-css', 'css/theme.css')
            // //     ->usePath()->add('theme-element-css', 'css/theme-elements.css')
            // //     ->usePath()->add('theme-blog-css', 'css/theme-blog.css')
            // //     ->usePath()->add('theme-shop-css', 'css/theme-shop.css');

            // $theme
            //     ->asset()
            //     ->usePath()->add('settings-css', 'vendor/rs-plugin/css/settings.css')
            //     ->usePath()->add('layers-css', 'vendor/rs-plugin/css/layers.css')
            //     ->usePath()->add('navigation-css', 'vendor/rs-plugin/css/navigation.css')
            //     ->usePath()->add('component-css', 'vendor/circle-flip-slideshow/css/component.css');

            // $theme
            //     ->asset()
            //     // ->usePath()->add('demo-landing-css', 'css/demos/demo-landing.css')
            //     ->usePath()->add('default-css', 'css/skins/default.css')
            //     // ->usePath()->add('skin-corporate-css', 'css/skins/skin-corporate-3.css')
            //     // ->usePath()->add('custom-css', 'css/custom.css')
            //     // ->usePath()->add('ionicons.min.css', 'css/ionicons.min.css')
            //     ;

            // //Javascript
            // $theme
            //     ->asset()
            //     ->container('header')
            //     ->usePath()->add('modernizr-js', 'vendor/modernizr/modernizr.min.js')
            //     ->usePath()->add('core-js', 'master/style-switcher/style.switcher.localstorage.js');

            $theme
                ->asset()
                ->container('footer')
                // ->usePath()->add('jquery-js', 'vendor/jquery/jquery.min.js')
                // ->usePath()->add('jquery-appear-js', 'vendor/jquery.appear/jquery.appear.min.js')
                // ->usePath()->add('jquery-easing-js', 'vendor/jquery.easing/jquery.easing.min.js')
                // ->usePath()->add('popper-js', 'vendor/popper/umd/popper.min.js')
                // ->usePath()->add('bootstrap-js', 'vendor/bootstrap/js/bootstrap.min.js')
                // ->usePath()->add('common-js', 'vendor/common/common.min.js')
                // ->usePath()->add('jquery-validate-js', 'vendor/jquery.validation/jquery.validate.min.js')
                // ->usePath()->add('jquery-gmap-js', 'vendor/jquery.gmap/jquery.gmap.min.js')
                // ->usePath()->add('jquery-lazyload-js', 'vendor/jquery.lazyload/jquery.lazyload.min.js')
                // ->usePath()->add('jquery-isotope-js', 'vendor/isotope/jquery.isotope.min.js')
                // ->usePath()->add('owl-carousel-js', 'vendor/owl.carousel/owl.carousel.min.js')
                // ->usePath()->add('jquery-magnific-js', 'vendor/magnific-popup/jquery.magnific-popup.min.js')
                // ->usePath()->add('jquery-vide-js', 'vendor/vide/jquery.vide.min.js')
                // ->usePath()->add('vivus-js', 'vendor/vivus/vivus.min.js')
                // ->usePath()->add('theme-js', 'js/theme.js')
                // ->usePath()->add('jquery-themepunch-tools-js', 'vendor/rs-plugin/js/jquery.themepunch.tools.min.js')
                // ->usePath()->add('jquery-themepunch-revolution-js', 'vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')
                // ->usePath()->add('jquery-flipshow-js', 'vendor/circle-flip-slideshow/js/jquery.flipshow.min.js')
                // ->usePath()->add('view-home-js', 'js/views/view.home.js')
                // ->usePath()->add('view-contact-js', 'js/views/view.contact.js')
                // ->usePath()->add('theme-init-js', 'js/theme.init.js')
                // ->usePath()->add('example-portofolio-js', 'js/examples/examples.portfolio.js')
                // ->usePath()->add('examples-carousels-js', 'js/examples/examples.carousels.js')
                // ->usePath()->add('style-switcher', 'master/style-switcher/style.switcher.js', ['id' => 'styleSwitcherScript', 'data-base-path'=>'', 'data-skin-src'=>''])
                ;

            // Partial composer.
            $theme->partialComposer('header', function($view)
            {
                $view->with('auth', \Auth::user());
            });


            $theme->composer(['index', 'page', 'post'], function(View $view) {
                $view->withShortcodes();
            });
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
