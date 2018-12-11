<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        
        Schema::create('role_permission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('permission_id')->unsigned();
            $table->bigInteger('FK_role_permission_roles_id')->unsigned();
            $table->foreign('FK_role_permission_roles_id')->references('id')->on('roles');
            $table->bigInteger('FK_role_permission_permissions_id')->unsigned();
            $table->foreign('FK_role_permission_permissions_id')->references('id')->on('permissions');
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
        
        Schema::dropIfExists('role_permission');
        
        Schema::enableForeignKeyConstraints();
    }
}
