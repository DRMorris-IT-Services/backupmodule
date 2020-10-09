<?php

Route::group(['namespace' => 'duncanrmorris\backupmodule\Http\Controllers'], function()
{
    Route::group(['middleware' => ['web', 'auth']], function(){

    Route::get('backup', 'BackupController@index')->name('backup');
    Route::get('backup/new', 'BackupController@create')->name('backup.new');
    Route::get('backup/start', 'BackupController@backup')->name('backup.now');
    Route::put('backup/del/action/{id}/{file}', 'BackupController@destroy')->name('backup.del.action');
    Route::get('backup/download/{id}', 'BackupController@download')->name('backup.download');

    });
});