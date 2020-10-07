<?php

Route::group(['namespace' => 'duncanrmorris\backupmodule\Http\Controllers'], function()
{
    Route::group(['middleware' => ['web', 'auth']], function(){

    Route::get('backup', 'BackupController@index')->name('backup');
    Route::get('backup/new', 'BackupController@create')->name('backup.new');
    Route::get('backup/start', 'BackupController@backup')->name('backup.now');
    Route::get('backup/del/{id}/{file}', 'BackupController@delete')->name('backup.del');
    Route::put('backup/del/action/{id}/{file}', 'BackupController@destroy')->name('backup.del.action');

    Route::get('/releasenotes', function(){
        return view('backupmodule::releasenotes');
    });

    });
});