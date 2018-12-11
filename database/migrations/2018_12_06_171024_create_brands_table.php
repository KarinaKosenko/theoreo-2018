<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->bigInteger('city_id')->unsigned();
            $table->text('address');
            $table->string('phone');
            $table->bigInteger('upload_id')->unsigned();
            $table->string('links');
            $table->bigInteger('FK_brands_cities_id')->unsigned();
            $table->foreign('FK_brands_cities_id')->references('id')->on('cities');
            $table->bigInteger('FK_brands_uploads_id')->unsigned();
            $table->foreign('FK_brands_uploads_id')->references('id')->on('uploads');
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
        
        Schema::dropIfExists('brands');
        
        Schema::enableForeignKeyConstraints();
    }
}
