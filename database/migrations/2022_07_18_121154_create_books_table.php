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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('series_id')->nullable()->default(NULL)->constrained()->onDelete('cascade');
            $table->string('name');
            $table->tinyInteger('score'); 
            $table->smallInteger('year');
            $table->tinyInteger('part')->nullable()->default(NULL);
            $table->text('annotation');
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
        Schema::dropIfExists('books');
    }
};
