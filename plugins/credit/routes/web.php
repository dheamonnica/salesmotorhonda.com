<?php

Route::group(['namespace' => 'Botble\Credit\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('core.base.general.admin_dir'), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'credits'], function () {

            Route::get('/', [
                'as' => 'credit.list',
                'uses' => 'CreditController@getList',
            ]);

            Route::get('/create', [
                'as' => 'credit.create',
                'uses' => 'CreditController@getCreate',
            ]);

            Route::post('/create', [
                'as' => 'credit.create',
                'uses' => 'CreditController@postCreate',
            ]);

            Route::get('/edit/{id}', [
                'as' => 'credit.edit',
                'uses' => 'CreditController@getEdit',
            ]);

            Route::post('/edit/{id}', [
                'as' => 'credit.edit',
                'uses' => 'CreditController@postEdit',
            ]);

            Route::get('/delete/{id}', [
                'as' => 'credit.delete',
                'uses' => 'CreditController@getDelete',
            ]);

            Route::post('/delete-many', [
                'as' => 'credit.delete.many',
                'uses' => 'CreditController@postDeleteMany',
                'permission' => 'credit.delete',
            ]);
        });
    });
    
});