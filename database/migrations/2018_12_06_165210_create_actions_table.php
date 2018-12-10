<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('brand_id')
            ->unsigned();
            $table->bigInteger('city_id')
            ->unsigned();
            $table->timestamp('active_from')->nullable();
            $table->timestamp('active_to')->nullable();
            $table->text('text');
            $table->bigInteger('upload_id')
            ->unsigned();
            $table->unsignedTinyInteger('status');
            $table->string('links');
            $table->string('type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actions');
    }
}
