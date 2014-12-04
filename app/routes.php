<?php

Route::get('/', array('uses' => 'CMSController@main', 'as' => 'app.home'));

/**
 * Asset stuff
 */
Route::get('/assets', array('uses' => 'AssetController@assets', 'as' => 'app.assets'));
Route::get('/assets/{file}', array('uses' => 'AssetController@assets', 'as' => 'app.assets'))->where('file', '([A-z\d-\/_.]+)?');

Route::get(
    '/favicon.ico',
    function () {
        Redirect::route('app.assets');
    }
);

/**
 * Main CMS Route; Ensure that this route is listed last!
 */
Route::get('/{slug}', array('uses' => 'CMSController@main', 'as' => 'app.page'));