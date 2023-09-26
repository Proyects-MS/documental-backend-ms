<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('date')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->unsignedBigInteger('state_id')->nullable();
            // $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->string('ext_file')->nullable();
            $table->longText('description')->nullable();
            $table->string('url')->nullable();
            $table->string('peso')->nullable();
            // $table->unsignedBigInteger('user_asig_id')->nullable();
            // $table->foreign('user_asig_id')->references('id')->on('users')->onDelete('cascade');
            $table->softdeletes();
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
        Schema::dropIfExists('files');
    }
};
