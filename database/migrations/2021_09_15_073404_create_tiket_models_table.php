<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_models', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->increments('ticket_id');
            $table->string('subject');
            $table->text('message');
            $table->enum('status', ['Open', 'Answered', 'Closed']);
            $table->enum('priority', ['High', 'Medium', 'Low']);
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
        Schema::dropIfExists('tiket_models');
    }
}
