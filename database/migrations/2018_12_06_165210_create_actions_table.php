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
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->timestamp('active_from')->nullable();
            $table->timestamp('active_to')->nullable();
            $table->text('text');
            $table->bigInteger('upload_id')->unsigned();
            $table->foreign('upload_id')->references('id')->on('uploads');
            $table->enum('status', ['new', 'rejected', 'approved', 'paid']);
            $table->string('links');
            $table->enum('type', ['stock', 'discount']);
            $table->timestamps();

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
