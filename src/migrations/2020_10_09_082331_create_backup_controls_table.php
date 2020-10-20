<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackupControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backupcontrols', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('backup_admin')->nullable();
            $table->string('backup_view')->nullable();
            $table->string('backup_add')->nullable();
            $table->string('backup_download')->nullable();
            $table->string('backup_del')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('backupcontrols');
    }
}
