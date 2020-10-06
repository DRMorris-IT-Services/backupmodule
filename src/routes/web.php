<?php

Route::group(['namespace' => 'duncanrmorris\backupmodule\Http\Controllers'], function()
{
    Route::get('backup', 'BackupController@index');
});