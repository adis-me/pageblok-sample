![Pageblok CMS][pageblok-logo]

# Pageblok CMS

> Please note that this project is far from production ready.
> This is also a personal open source project so keep far away from it.

This package is a plain Laravel repo with a sample theme to demonstrate Pageblok.

# Seeding the Database

Get started with the demo theme by seeding the database:

    php artisan db:seed --class="Pageblok\\Core\\Databases\\Seeds\\DatabaseSeeder"

# Adding routes

    
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






[pageblok-logo]: http://www.webworker.nl/packages/adis-me/pageblok/img/pageblok-logo-100.png "Pageblok CMS"