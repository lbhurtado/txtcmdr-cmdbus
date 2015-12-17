<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    const GENDERS = ['M','F'];
    const DIALECTS = ['eng','tag','lok','ceb'];
    const STATUS = ['active','inactive','suspended'];
    const ADDRESS_TYPES = ['home','work','current'];

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
            $table->enum('language', static::DIALECTS)->default('eng');
            $table->enum('gender', static::GENDERS)->nullable();
            $table->enum('status', static::STATUS)->default('inactive');
            $table->unsignedSmallInteger('age')->nullable();
            $table->unsignedInteger('recruiter_id')->nullable();
            $table->string('remember_token')->nullable();
            $table->timestamps();
            $table->foreign('recruiter_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->char('town_id', 9);
            $table->enum('type', static::ADDRESS_TYPES);
            $table->string('address')->nullable();
            $table->timestamps();
            $table->unique(['user_id', 'type']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('town_id')->references('id')->on('towns')->onUpdate('cascade');
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description')->nullable();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('project_id')->nullable();
            $table->unsignedInteger('group_id')->nullable();
            $table->timestamps();
            $table->unique(['project_id', 'name']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });

        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('project_id')->nullable();
            $table->timestamps();
            $table->unique(['project_id', 'name']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });

        DB::select("ALTER TABLE subscriptions COMMENT = 'Project Subscriptions'");

        Schema::create('conferences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('project_id')->nullable();
            $table->timestamps();
            $table->unique(['project_id', 'name']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });

        DB::select("ALTER TABLE conferences COMMENT = 'Project Conferences'");

        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('location')->nullable();
            $table->string('mood')->nullable();
            $table->string('health')->nullable();
            $table->decimal('latitude',6,4)->nullable();
            $table->decimal('longitude',7,4)->nullable();
            $table->unsignedInteger('project_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        DB::select("ALTER TABLE statuses COMMENT = 'Project User Statuses'");

        Schema::create('objectives', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id')->nullable();
            $table->string('name');
            $table->timestamps();
            $table->unique(['project_id', 'name']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });

        DB::select("ALTER TABLE objectives COMMENT = 'Project Objectives'");

        Schema::create('transcripts', function (Blueprint $table) {
            $table->string('code');
            $table->enum('language', static::DIALECTS);
            $table->text('text');
            $table->primary(['code', 'language']);
        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('objective_id')->nullable();
            $table->string('transcript_code')->nullable();
            $table->string('regex')->nullable();
            $table->unsignedTinyInteger('quota')->default(1);
            $table->unsignedTinyInteger('sequence')->default(1);
            $table->unsignedTinyInteger('priority')->default(1);
            $table->boolean('enaged')->default(true);
            $table->timestamps();
            $table->unique(['objective_id', 'transcript_code']);
            $table->foreign(['transcript_code'])->references(['code'])->on('transcripts')->onUpdate('cascade');
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

        Schema::create('contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('assignment_id')->nullable();
            $table->float('contribution')->default(1);
            $table->timestamps();
            $table->foreign(['assignment_id'])->references(['id'])->on('assignments')->onDelete('cascade');
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
        Schema::drop('subscriptions');
        Schema::drop('conferences');
        Schema::drop('contributions');
        Schema::drop('assignments');
        Schema::drop('tasks');
        Schema::drop('objectives');
        Schema::drop('transcripts');
        Schema::drop('projects');
        Schema::drop('addresses');
        Schema::drop('users');
    }
}
