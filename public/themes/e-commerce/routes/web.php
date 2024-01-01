<?php

Route::group(['namespace' => 'Theme\ECommerce\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/test', [
            'uses' => 'ECommerceController@test',
        ]);

    });

});
