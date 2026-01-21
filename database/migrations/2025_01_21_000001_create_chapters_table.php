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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('books')->cascadeOnDelete();
            $table->string('title');
            $table->integer('chapter_number');
            $table->enum('content_type', ['text', 'pdf'])->default('text');
            $table->longText('content')->nullable();
            $table->string('pdf_path')->nullable();
            $table->timestamps();
            $table->unique(['book_id', 'chapter_number']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapters');
    }
};
