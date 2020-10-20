<?php

namespace duncanrmorris\backupmodule\App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BackupController extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'backup_id', 'backup_filename', 'backup_url',
    ];
}
