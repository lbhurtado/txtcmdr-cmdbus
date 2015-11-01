<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->char('id', 9)->primary();
            $table->string('name')->unique();
            $table->string('code')->unique();
        });

        Schema::create('provinces', function (Blueprint $table) {
            $table->char('id', 9)->primary();
            $table->string('name')->unique();
            $table->string('region_id');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });

        Schema::create('towns', function (Blueprint $table) {
            $table->char('id', 9)->primary();
            $table->string('name');
            $table->index('name');
            $table->unique(['id', 'name']);
            $table->string('province_id');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('towns');
        Schema::drop('provinces');
        Schema::drop('regions');
    }
}
