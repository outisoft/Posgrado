<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidationDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validation_document', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_document')->references('id')->on('documents')->onDelete('cascade');
            $table->double('val_defoinve');
            $table->double('val_di');
            $table->double('val_dgip');
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
        Schema::dropIfExists('validation_document');
    }
}
