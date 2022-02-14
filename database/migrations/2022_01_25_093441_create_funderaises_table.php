<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunderaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funderaises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('region');
            $table->unsignedBigInteger('user_id');
            $table->integer('amount_received')->default(0);
            $table->string('category');
            $table->string('title');
            $table->text('description');
            $table->string('number');
            $table->string('file');

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('funderaises');
    }
}
