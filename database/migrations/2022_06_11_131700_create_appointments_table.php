<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id')->nullable();
            $table->integer('policlinic_id')->nullable();
            $table->integer('date')->nullable();
            $table->integer('time')->nullable();
            $table->integer('price')->nullable();
            $table->integer('payment')->nullable();
            $table->string('note',150)->nullable();
            $table->string('IP',20)->nullable();
            $table->string('status',10)->nullable()->default('New');
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
        Schema::dropIfExists('appointments');
    }
}
