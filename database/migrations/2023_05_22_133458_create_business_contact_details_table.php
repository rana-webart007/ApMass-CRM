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
        Schema::create('business_contact_details', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->string('org_id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('home')->nullable();
            $table->string('cell')->nullable();
            $table->string('business_role')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_contact_details');
    }
};
