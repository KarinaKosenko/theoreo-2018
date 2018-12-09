<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParserRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parser_runs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamp('parse_time')->nullable();
            $table->integer('all_records_cnt')->unsigned();
            $table->integer('added_actions_cnt')->unsigned();
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
        Schema::dropIfExists('parser_runs');
    }
}
