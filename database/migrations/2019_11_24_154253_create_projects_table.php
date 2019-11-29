<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('institutional_link_name')->nullable();
            $table->string('start_season', 15);
            $table->longText('involved_classes');
            $table->longText('pcc_calendar_classes_articulation');
            $table->longText('preview_credits_classes');
            $table->longText('infrastructure');
            $table->longText('public_participation');
            $table->longText('accompaniment_and_evaluation');
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
        Schema::dropIfExists('projects');
    }
}
