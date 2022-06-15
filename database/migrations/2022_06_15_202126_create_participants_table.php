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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 50);
            $table->string("apellido", 50)->nullable();
            $table->string("empresa", 50)->nullable();
            $table->integer("edad");
            $table->string("estado", 50)->nullable();
            $table->string('email')->unique();
            $table->integer("telefono")->unique();

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
