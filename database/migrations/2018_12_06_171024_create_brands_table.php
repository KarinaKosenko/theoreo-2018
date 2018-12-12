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
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->text('address');
            $table->string('phone');
            $table->bigInteger('upload_id')->unsigned();
            $table->foreign('upload_id')->references('id')->on('uploads')->onDelete('cascade');
            $table->string('links');
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
        
        Schema::table('brand_city', function (Blueprint $table) {
            
            $table->dropForeign(['brand_id']);
                    
        });
        
        Schema::table('actions', function (Blueprint $table) {
            
            $table->dropForeign(['brand_id']);
                    
        });
        
        Schema::dropIfExists('brands');
                
        Schema::enableForeignKeyConstraints();
    }
}
