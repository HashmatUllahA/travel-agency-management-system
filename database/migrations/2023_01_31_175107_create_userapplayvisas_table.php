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
        Schema::create('userapplayvisas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('fname');
            $table->string('gender' ,255);
            $table->string('cnicno' , 255);
            $table->string('dob' , 255);
            $table->string('placebarth');
            $table->string('passportno');
            $table->string('expriypassport');
            $table->string('visatitle');
            $table->string('Experience');
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
        Schema::dropIfExists('userapplayvisas');
    }
};
