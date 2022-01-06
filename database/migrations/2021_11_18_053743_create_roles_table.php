<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('role-name');
            $table->string('is_active');

            $table->boolean('rm-view')->default(0);
            $table->boolean('rm-update')->default(0);
            $table->boolean('rm-create')->default(0);
            $table->boolean('rm-delete')->default(0);

            $table->boolean('cm-view')->default(0);
            $table->boolean('cm-update')->default(0);
            $table->boolean('cm-create')->default(0);
            $table->boolean('cm-delete')->default(0);

            $table->boolean('um-view')->default(0);
            $table->boolean('um-update')->default(0);
            $table->boolean('um-create')->default(0);
            $table->boolean('um-delete')->default(0);

            $table->string('createBy')->nullable();
            $table->string('editBy')->nullable();

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
        Schema::dropIfExists('roles');
    }
}
