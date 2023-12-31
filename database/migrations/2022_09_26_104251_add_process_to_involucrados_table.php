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
        Schema::table('involucrados', function (Blueprint $table) {
            $table->unsignedBigInteger('process_id')->nullable();
            $table->foreign('process_id')->references('id')->on('process')->onDelete('cascade');     

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('involucrados', function (Blueprint $table) {
            $table->dropColumn('process_id');
        });
    }
};
