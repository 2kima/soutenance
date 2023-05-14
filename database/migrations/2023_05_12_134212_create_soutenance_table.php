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
        Schema::create('soutenance', function (Blueprint $table) {
            $table->id();
            $table->string('etudiantnom');
            $table->string('date');
            $table->string('lieu');
            $table->string('directeurMemoire');
            $table->string('niveau');
            $table->string('contact');
            $table->string('nom');
            $table->string('prenom');
            $table->string('cycle');
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
        Schema::dropIfExists('soutenance');
    }
};
