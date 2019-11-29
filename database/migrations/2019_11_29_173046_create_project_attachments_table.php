<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectAttachmentsTable extends Migration
{
    private $attachmentTypes = ['document','image','video','publication','event','assigns_list','other'];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('attachment_id');
            $table->enum('attachment_type', $this->attachmentTypes);
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
        Schema::dropIfExists('project_documents');
    }
}
