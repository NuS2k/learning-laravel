<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->unsignedInteger('mkh')->generatedAs();
            $table->integer('age');
            $table->string('address', 255);
            $table->string('note', 255);
            $table->string('phone', 255)->unique();
            $table->string('cmnd', 255)->unique();
            $table->string('bank', 255);
            $table->unsignedInteger('role_id');
            $table->tinyInteger('sex');
            $table->date('birthday');
            $table->unsignedInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
