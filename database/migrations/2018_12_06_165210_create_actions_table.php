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
        Schema::disableForeignKeyConstraints();
        
        Schema::create('actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('brand_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->timestamp('active_from')->nullable();
            $table->timestamp('active_to')->nullable();
            $table->text('text');
            $table->bigInteger('upload_id')->unsigned();
            $table->enum('status', ['new', 'rejected', 'approved', 'paid']);
            $table->string('links');
            $table->enum('type', ['stock', 'discount']);
            $table->bigInteger('FK_actions_brands_id')->unsigned();
            $table->foreign('FK_actions_brands_id')->references('id')->on('brands');
            $table->bigInteger('FK_actions_cities_id')->unsigned();
            $table->foreign('FK_actions_cities_id')->references('id')->on('cities');
            $table->bigInteger('FK_actions_uploads_id')->unsigned();
            $table->foreign('FK_actions_uploads_id')->references('id')->on('uploads');
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
        
        Schema::dropIfExists('actions');
        
        Schema::enableForeignKeyConstraints();
    }
}
