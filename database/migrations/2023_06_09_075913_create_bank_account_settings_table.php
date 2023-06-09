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
        Schema::create('bank_account_settings', function (Blueprint $table) {
            $table->id();
            $table->string('client_id', 50);
            $table->string('trust_account_id', 50)->nullable();
            $table->text('pdf_trust_deposite')->nullable();
            $table->text('pdf_trust_payment')->nullable();
            $table->text('pdf_operating_payment')->nullable();
            $table->text('pdf_trust_transfer')->nullable();
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
        Schema::dropIfExists('bank_account_settings');
    }
};
