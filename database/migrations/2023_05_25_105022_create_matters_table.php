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
        Schema::create('matters', function (Blueprint $table) {
            $table->id();
            $table->string('matter_id');
            $table->string('added_by', 50)->nullable();
            $table->string('state_abbr', 20);
            $table->text('matter_area')->nullable();
            $table->text('matter_type')->nullable();
            $table->text('internal_ref')->nullable();
            $table->text('matter_descp')->nullable();
            $table->text('client_role')->nullable();
            $table->text('attorney_responsible')->nullable();
            $table->text('person_assisting')->nullable();
            $table->text('originating_attorney')->nullable();
            $table->text('client')->nullable();
            $table->text('debtors')->nullable();
            $table->text('billing_type')->nullable();
            $table->text('fee_estimate')->nullable();
            $table->text('contingency')->nullable();
            $table->text('bulling_units')->nullable();
            $table->text('custom_minutes')->nullable();
            $table->text('hourly_rates')->nullable();
            $table->text('override_rate_for_all')->nullable();
            $table->text('override_indicidual_name')->nullable();
            $table->text('override_indicidual_rate')->nullable();
            $table->text('late_payment')->nullable();
            $table->text('grace_period')->nullable();
            $table->text('custom_days')->nullable();
            $table->text('custom_interest')->nullable();
            $table->text('calculate_interest_from')->nullable();
            $table->text('cc_emails')->nullable();
            $table->text('bcc_emails')->nullable();
            $table->text('invoice_templates')->nullable();
            $table->text('invoice_title')->nullable();
            $table->text('custom_invoice_title')->nullable();
            $table->text('invoice_sub_title')->nullable();
            $table->text('custom_invoice_sub_title')->nullable();
            $table->text('notes')->nullable();
            $table->text('einvoice')->nullable();
            $table->text('surcharge')->nullable();
            $table->text('surcharge_type')->nullable();
            $table->text('surcharge_percent_amount')->nullable();
            $table->text('surcharge_apply_to')->nullable();
            $table->text('surcharge_label_on_invoice')->nullable();
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
        Schema::dropIfExists('matters');
    }
};
