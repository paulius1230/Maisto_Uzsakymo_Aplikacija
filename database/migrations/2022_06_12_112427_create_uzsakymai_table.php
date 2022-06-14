<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUzsakymaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uzsakymai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patiekalo_id');
            $table->foreign('patiekalo_id')->references('id')->on('patiekalai')->onDelete('cascade');
            $table->integer('kiekis');
            $table->unsignedBigInteger('vartotojo_id');
            $table->foreign('vartotojo_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('busena')->default('vykdoma');
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
        Schema::dropIfExists('uzsakymai');
    }
}
