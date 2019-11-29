<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformedPublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performed_publications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('attachment_id')->nullable();
            $table->enum('type', ['artigo','capitulo','resumo']);
            $table->string('title');
            $table->string('journal_name');
            $table->string('publication_link')->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('attachment_id')->references('id')->on('attachments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performed_publications');
    }
}
