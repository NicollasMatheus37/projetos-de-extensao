<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTargetsTable extends Migration
{
    private $age_range = [
        'Até 12 anos incompletos',
        'Até 18 anos',
        'De 19 a 25 anos',
        'De 26 a 30 anos',
        'De 31 a 50 anos',
        'De 51 a 60 anos',
        'De 61a 70 anos',
        'Acima de 70 anos'
    ];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_targets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->integer('men_number')->nullable();
            $table->integer('women_number')->nullable();
            $table->enum('age_range', $this->age_range);
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_targets');
    }
}
