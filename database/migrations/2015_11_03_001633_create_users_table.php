<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile')->unique();
            $table->string('password');
            $table->enum('gender', ['M','F'])->nullable();
            $table->unsignedSmallInteger('age')->nullable();
            $table->unsignedInteger('recruiter_id')->nullable();
            $table->string('remember_token')->nullable();
            $table->timestamps();
            $table->foreign('recruiter_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('project_id')->nullable();
            $table->timestamps();
            $table->unique(['project_id','name']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });

        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('project_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();
            $table->unique(['project_id','user_id']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('objectives', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id')->nullable();
            $table->string('name');
            $table->timestamps();
            $table->unique(['project_id', 'name']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('objective_id')->nullable();
            $table->string('name');
            $table->string('instructions')->nullable();
            $table->string('regex')->nullable();
            $table->unsignedTinyInteger('sequence')->default(1);
            $table->unsignedTinyInteger('priority')->default(1);
            $table->timestamps();
            $table->unique(['objective_id', 'name']);
            $table->foreign(['objective_id'])->references(['id'])->on('objectives')->onDelete('cascade');
        });

        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('task_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->boolean('finished')->default(false);
            $table->string('remarks')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
            $table->unique(['task_id', 'user_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign(['task_id'])->references(['id'])->on('tasks')->onDelete('cascade');
        });

        Schema::create('transcripts', function (Blueprint $table) {
            $table->string('code');
            $table->enum('language',['eng','tag','lok','ceb']);
            $table->text('text');
            $table->primary(['code', 'language']);
        });

//        Schema::create('journeys', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->unsignedInteger('project_id')->nullable();
//            $table->timestamps();
//            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
//        });
//
//        Schema::create('itineraries', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->boolean('arrived')->default(false);
//            $table->string('instructions')->nullable();
//            $table->string('remarks')->nullable();
//            $table->json('data')->nullable();
//            $table->unsignedInteger('project_id')->nullable();
//            $table->unsignedInteger('journey_id')->nullable();
//            $table->timestamps();
//            $table->unique(['project_id','journey_id', 'name']);
//            $table->foreign('project_id', 'journey_id')->references('project_id', 'id')->on('journeys')->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::drop('itineraries');
//        Schema::drop('journeys');
        Schema::drop('statuses');
        Schema::drop('groups');

        Schema::drop('assignments');
        Schema::drop('tasks');
        Schema::drop('objectives');
        Schema::drop('transcripts');
        Schema::drop('projects');
        Schema::drop('users');
    }
}
