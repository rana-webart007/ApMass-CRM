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
        Schema::create('clients_matters', function (Blueprint $table) {
            $table->id();
            $table->string('matters_id', 100);
            $table->string('state_abbr', 20);
            $table->string('law_area', 100);
            $table->string('matter_type');
            $table->string('internal_preference');
            $table->text('matter_description');
            $table->string('client_role');

            $table->string('attorney_responsible')->nullable();
            $table->string('person_assisting')->nullable();
            $table->string('organization_attorney')->nullable();

            $table->string('client');
            $table->string('debtors');

            $table->string('billing_types', 50)->nullable();
            $table->string('fee_estimate_billing', 20)->nullable();
            $table->string('contingency_percent', 20)->nullable();
            $table->string('billing_units', 20)->nullable();
            $table->string('custom_billing_units', 20)->nullable();
            $table->string('hourly_rate', 20)->nullable();
            $table->string('custom_override_rate', 20)->nullable();
            $table->string('custom_override_default_client')->nullable();
            $table->string('custom_override_default_rate', 50)->nullable();
            $table->string('late_payment')->nullable();
            $table->string('grace_period')->nullable();
            $table->string('grace_period_days')->nullable();
            $table->string('grace_period_interest', 50)->nullable();
            $table->string('grace_period_interest_from')->nullable();

            $table->text('cc_emails')->nullable();
            $table->text('bcc_emails')->nullable();

            $table->string('invoice_template')->nullable();
            $table->string('invoive_title', 250)->nullable();
            $table->string('custom_invoice_title_field', 250)->nullable();
            $table->string('invoive_sub_title', 250)->nullable();
            $table->string('custom_invoice_sub_title_field', 200)->nullable();
            $table->text('notes')->nullable();
            $table->string('einvoice', 200)->nullable();

            $table->string('surcharge_check', 20)->nullable();
            $table->string('surcharge_type', 100)->nullable();
            $table->string('surcharge_percent_or_amount', 50)->nullable();
            $table->string('surcharge_apply_to', 100)->nullable();
            $table->string('surcharge_liable', 250)->nullable();
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
        Schema::dropIfExists('clients_matters');
    }
};
