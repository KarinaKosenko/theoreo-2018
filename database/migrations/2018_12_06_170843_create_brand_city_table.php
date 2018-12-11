<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        
        Schema::create('brand_city', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('FK_brand_city_brands_id')->unsigned();
            $table->foreign('FK_brand_city_brands_id')->references('id')->on('brands');
            $table->bigInteger('FK_brand_city_cities_id')->unsigned();
            $table->foreign('FK_brand_city_cities_id')->references('id')->on('cities');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            
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
        
        Schema::dropIfExists('brand_city');
        
        Schema::enableForeignKeyConstraints();
    }
}
