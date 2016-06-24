<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register the API routes for your application as
| the routes are automatically authenticated using the API guard and
| loaded automatically by this application's RouteServiceProvider.
|
*/

Route::group([
    'prefix' => 'api',
    'middleware' => 'auth:api'
], function () {

  Route::get('/Settlements',function(){
    return $settlements=\App\Settlement::get();
  });

  Route::get('/PendingLitigation',function(){
    return $pending=\App\PendingLitigation::get();
  });
  Route::get('/Newsletter',function(){
    return $pending=\App\Newsletter::get();
  });
});
