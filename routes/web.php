<?php

Route::get('panel', 'Panel\PanelController@index');

Route::get('promocoes', 'Site\SiteController@promotions')->name('promotions');

Route::get('/', 'Site\SiteController@index');


Auth::routes();