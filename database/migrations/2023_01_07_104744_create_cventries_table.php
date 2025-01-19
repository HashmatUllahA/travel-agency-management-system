<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Models\cventry;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cventries', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username', 255);
            $table->text('trade')->nullable();
            $table->string('city');
            $table->string('contect1')->unique();
            $table->string('contect2')->nullable();
            $table->string('passport');
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
        Schema::dropIfExists('cventries');
    }
};
