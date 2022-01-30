<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->string('email',150);
            $table->string('title',150);
            $table->string('phone',150);
            $table->string('street',150);
            $table->string('city',150);
            $table->string('state',150);
            $table->string('country',150);
            $table->string('zipcode',150);
            $table->string('fb',150);
            $table->string('instagram',150);
            $table->string('tag',150);
            $table->mediumtext('description');
            $table->string('logo',150);
            $table->string('favicon',150);
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
        Schema::dropIfExists('settings');
    }
}
