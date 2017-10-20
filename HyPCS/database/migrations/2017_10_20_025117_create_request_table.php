<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->increments('id_request');
            $table->unsignedInteger('id_customer');
            $table->unsignedInteger('id_admin');
            $table->unsignedInteger('id_consultant')->nullable();
            $table->boolean('schedule');
            $table->string('subject');
            $table->string('description');
            $table->string('importance');
            $table->date('date_created');
            $table->date('deadline');
            $table->boolean('solved');
            $table->timestamps();
        });

        Schema::table('request', function($table) {
            $table->foreign('id_customer')->references('id_customer')->on('customers');
            $table->foreign('id_admin')->references('id_admin')->on('admins');
            $table->foreign('id_consultant')->references('id_consultant')->on('consultants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
}
