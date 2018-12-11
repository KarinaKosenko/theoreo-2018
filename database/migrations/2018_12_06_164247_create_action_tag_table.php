<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        
        Schema::create('action_tag', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger('action_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->bigInteger('FK_action_tag_tags_id')->unsigned();
            $table->foreign('FK_action_tag_tags_id')->references('id')->on('tags');
            $table->bigInteger('FK_action_tag_actions_id')->unsigned();
            $table->foreign('FK_action_tag_actions_id')->references('id')->on('actions');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');

        });
        
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        
        Schema::dropIfExists('action_tag');
        
        Schema::enableForeignKeyConstraints();
    }
}
