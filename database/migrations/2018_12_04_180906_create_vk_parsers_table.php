<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVkParsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vk_parsers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_id', 20)->nullable();
            $table->string('client_secret', 32)->nullable();
            $table->string('access_token', 100)->nullable();
            $table->timestamp('last_parse')->nullable();
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
        Schema::dropIfExists('vk_parsers');
    }
}
