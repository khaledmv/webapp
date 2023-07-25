<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->text('workImage')->nullable();
            $table->text('brandImage')->nullable();
            $table->string('techTitle');
            $table->text('body');
            $table->string('resultImage1')->nullable();
            $table->string('resultImage2')->nullable();
            $table->string('fontImage')->nullable();
            $table->string('colorImage')->nullable();
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
        Schema::dropIfExists('works');
    }
}
