<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        
        Schema::create('action_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('action_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('FK_action_category_categories_id')->unsigned();
            $table->foreign('FK_action_category_categories_id')->references('id')->on('categories');
            $table->bigInteger('FK_action_category_actions_id')->unsigned();
            $table->foreign('FK_action_category_actions_id')->references('id')->on('actions');
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
        
        Schema::dropIfExists('action_category');
        
        Schema::enableForeignKeyConstraints();
    }
}
