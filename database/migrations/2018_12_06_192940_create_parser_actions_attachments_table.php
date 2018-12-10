<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParserActionsAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parser_actions_attachments', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('action_id');
            $table->string('type', 50);
            $table->string('url', 250);
            $table->longText('text')->nullable();
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
        Schema::dropIfExists('parser_actions_attachments');
    }
}
