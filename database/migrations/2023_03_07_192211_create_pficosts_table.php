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
        Schema::create('pficosts', function (Blueprint $table) {
            $table->id();
            $table->string('work', 255);
            $table->text('expence');
            $table->string('details');
            $table->string('paymentstutas' , 255);
            $table->string('date' , 255);
            $table->string('msg')->nullable();
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
        Schema::dropIfExists('pficosts');
    }
};
