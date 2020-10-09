<?php

Route::group(['namespace' => 'duncanrmorris\backupmodule\Http\Controllers'], function()
{
    Route::group(['middleware' => ['web', 'auth']], function(){

    Route::get('backup', 'BackupController@index')->name('backup');
    Route::get('backup/new', 'BackupController@create')->name('backup.new');
    Route::get('backup/start', 'BackupController@backup')->name('backup.now');
    Route::put('backup/del/action/{id}/{file}', 'BackupController@destroy')->name('backup.del.action');
    Route::get('backup/download/{id}', 'BackupController@download')->name('backup.download');

    ### CONTROLS ###
    Route::get('backup/controls', 'BackupcontrolsController@index')->name('backup.controls');
    Route::get('backup/controls/view/{id}', 'BackupcontrolsController@show')->name('backup.controls.view');
    Route::get('backup/controls/setup/{id}', 'BackupcontrolsController@create')->name('backup.controls.setup');
    Route::get('backup/controls/edit/{id}', 'BackupcontrolsController@edit')->name('backup.controls.edit');
    Route::put('backup/controls/update/{id}', 'BackupcontrolsController@update')->name('backup.controls.update');

    });
});