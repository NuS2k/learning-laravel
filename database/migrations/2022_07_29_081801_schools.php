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
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name')->unique();
            $table->char('email')->unique()->nullable();
            $table->char('code')->unique()->nullable();
            $table->char('address')->unique()->nullable();
            $table->char('type', 10)->nullable();
            $table->char('phone', 100)->nullable();
            $table->char('hotline');
            $table->string('province_code');
            $table->string('institution_code');
            $table->tinyInteger('main_branch');
            $table->integer('zip_code');
            $table->date('attribute_information_setting_date');
            $table->string('old_school_investigation_number');
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('fax_number')->nullable();
            $table->timestamp();
            $table->softDeletes($column = 'deleted_at');

            $table->foreign('taggable_id')->references('id')->on('users')
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
        Schema::dropIfExists('schools');
    }
};
