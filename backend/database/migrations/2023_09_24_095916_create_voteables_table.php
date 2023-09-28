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
        Schema::create('voteables', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('voteables_id');
            $table->string('voteables_type');
            $table->tinyInteger('vote')->comment('-1: down vote, 1: up vote');
            $table->timestamps();
            $table->unique(['user_id', 'voteables_id', 'voteables_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voteables');
    }
};
