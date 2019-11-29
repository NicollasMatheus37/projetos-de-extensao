<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectPublicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_publics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('public_id');
            $table->tinyInteger('directly')->default(0);
            $table->string('other_public_title')->nullable();
            $table->string('other_public_cras')->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('public_id')->references('id')->on('publics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_publics');
    }
}
