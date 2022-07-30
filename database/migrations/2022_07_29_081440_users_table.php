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
            $table->string('address')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->tinyInteger('type')->comment('For detect user')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->boolean('closed')->default('false')->nullable();
            $table->string('code')->unique()->nullable();
            $table->tinyInteger('social_type')->nullable();
            $table->unsignedInteger('social_id')->unique()->nullable();
            $table->string('social_name')->nullable();
            $table->string('social_nickname')->nullable();
            $table->string('social_avatar')->nullable();
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('school_id')->references('id')->on('schools')
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
        Schema::dropIfExists('users');
    }
};
