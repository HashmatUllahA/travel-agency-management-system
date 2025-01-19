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
        Schema::create('availablevasas', function (Blueprint $table) {
            $table->id();
            $table->string('country', 255);
            $table->text('title');
            $table->string('requerd' ,255);
            $table->string('lastdate' , 255);
            $table->string('advimg')->nullable();
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
        Schema::dropIfExists('availablevasas');
    }
};
