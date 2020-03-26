<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialSettingsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return voidA
     */
    public function up() {

        Schema::create('social_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      
        Schema::dropIfExists('social_settings');
    }
}
