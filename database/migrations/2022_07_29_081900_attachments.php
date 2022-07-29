<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('uuid', 36);
            $table->char('attachable_type', 255);
            $table->unsignedInteger('attachable_id');
            $table->char('file_path', 255)->default('');
            $table->char('file_name', 255)->default('');
            $table->char('extension', 255)->default('');
            $table->char('mime_type', 255)->default('');
            $table->unsignedInteger('size')->default(0);
            $table->timestamp()->default(null);
            $table->softDeletes($column = 'deleted_at')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
};
