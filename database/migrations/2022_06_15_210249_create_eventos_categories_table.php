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
        Schema::create('eventos_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId("evento_id")->constrained()->onDelete("cascade");
            $table->foreignId("category_id")->constrained()->onDelete("cascade");
            //$table->timestamps();

            //índice que garantice el N:N
            $table->unique(["evento_id", "category_id"]);
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
        Schema::dropIfExists('eventos_categories');
    }
};
