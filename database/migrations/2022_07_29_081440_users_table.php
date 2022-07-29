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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 20);
            $table->string('email', 32);
            $table->string('username', 50);
            $table->string('password', 200);
            $table->string('address');
            $table->unsignedBigInteger('school_id')->nullable();
            $table->tinyInteger('type')->commit('For detect user');
            $table->unsignedInteger('parent_id', 10);
            $table->boolean('closed')->default('false');
            $table->string('code')->unique()->nullable();
            $table->tinyInteger('social_type');
            $table->unsignedInteger('social_id')->unique()->nullable;
            $table->string('social_name');
            $table->string('social_nickname');
            $table->string('social_avatar');
            $table->text('description');
            $table->timestamp();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ussers');
    }
};
