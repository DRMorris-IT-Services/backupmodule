<?php

Route::group(['namespace' => 'duncanrmorris\backupmodule\Http\Controllers'], function()
{
    Route::group(['middleware' => ['web', 'auth']], function(){

    Route::get('backup', 'BackupController@index')->name('home');
    Route::get('backup/list', 'BackupController@list')->name('list');
    Route::get('backup/new', 'BackupController@create')->name('new');
    Route::get('backup/start', 'BackupController@backup')->name('backup.now');
    });
});