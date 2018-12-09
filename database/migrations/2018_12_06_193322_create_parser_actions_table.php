<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParserActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parser_actions', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('ext_id');
            $table->integer('source_id');
            $table->timestamp('date')->nullable();
            $table->string('name', 200);
            $table->string('text');
            $table->enum('status', ['Ожидает модерации', 'Принята', 'Отклонена']);
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
        Schema::dropIfExists('parser_actions');
    }
}
