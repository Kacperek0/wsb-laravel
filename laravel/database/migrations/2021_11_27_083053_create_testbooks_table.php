<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testbooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->year('year');
            $table->string('publication_place');
            $table->integer('pages');
            $table->decimal('price', 4, 2);
            $table->dateTime('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testbooks');
    }
}
