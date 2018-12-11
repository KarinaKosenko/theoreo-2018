<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        
        Schema::create('user_role', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('FK_user_role_roles_id')->unsigned();
            $table->foreign('FK_user_role_roles_id')->references('id')->on('roles');
            $table->bigInteger('FK_user_role_users_id')->unsigned();
            $table->foreign('FK_user_role_users_id')->references('id')->on('users');
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
        
        Schema::dropIfExists('user_role');
        
        Schema::enableForeignKeyConstraints();
    }
}
