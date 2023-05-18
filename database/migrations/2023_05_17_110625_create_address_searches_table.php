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
        Schema::create('address_searches', function (Blueprint $table) {
            $table->id();
            $table->text('address_id', 100)->nullable();
            $table->text('location');
            $table->text('address_line_1');
            $table->text('address_line_2')->nullable();
            $table->string('state');
            $table->string('city');
            $table->string('zip');
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
        Schema::dropIfExists('address_searches');
    }
};
