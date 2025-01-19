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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('fathername');
            $table->string('trade');
            $table->string('contect' , 255);
            $table->string('passportno' ,255);
            $table->string('totalpayment' , 255);
            $table->string('recivepayment');
            $table->string('paymentstutas');
            $table->string('companyname');
            $table->string('city');
            $table->string('country');
            $table->string('date');
            $table->string('file')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
