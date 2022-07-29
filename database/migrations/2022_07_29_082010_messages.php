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
        Schema::create('messages', function (Blueprint $table) {
            $table->Increments('id');
            $table->char('room', 255);
            $table->unsignedInteger('sender_id');
            $table->char('sender_type', 255);
            $table->unsignedInteger('receiver_id');
            $table->char('receiver_type', 255);
            $table->text('content');
            $table->char('content_type', 255)->default('text');
            $table->unsignedInteger('association_id')->default(null);
            $table->char('association_type', 255)->default(null);
            $table->timestamp()->default(null);
            $table->softDeletes($column = 'deleted_at')->default(null);

            $table->foreign('sender_id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
