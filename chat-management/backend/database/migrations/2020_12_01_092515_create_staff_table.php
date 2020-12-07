<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('name')->nullable()->comment('user name');
            $table->string('email')->nullable()->comment('email');
            $table->string('password')->nullable()->comment('password');
            $table->string('role')->nullable()->comment('role: staff/admin');
            $table->string('created')->nullable()->comment('created date time');
            $table->string('modified')->nullable()->comment('modified date time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
