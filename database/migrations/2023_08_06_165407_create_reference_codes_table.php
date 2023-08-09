<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reference_codes', function (Blueprint $table) {
            $table->id();
            $table->text('RefCode');
            $table->integer('CompCode');
            $table->text('Component');
            $table->double('OutputCode');
            $table->text('Output');
            $table->text('ActivityMain');
            $table->text('RefCodeCategory');
            $table->text('ActivityCategory');
            $table->text('Activity');
            $table->text('Training');
            $table->text('CostType');
            $table->text('Unit');
            $table->text('QtyYr1')->nullable();
            $table->text('QtyYr2')->nullable();
            $table->text('QtyYr3')->nullable();
            $table->text('QtyYr4')->nullable();
            $table->text('QtyYr5')->nullable();
            $table->text('QtyYr6')->nullable();
            $table->text('QtyTotal')->nullable();
            $table->text('UnitCost')->nullable();
            $table->text('TotalcostYr1')->nullable();
            $table->text('TotalcostYr2')->nullable();
            $table->text('TotalcostYr3')->nullable();
            $table->text('TotalcostYr4')->nullable();
            $table->text('TotalcostYr5')->nullable();
            $table->text('TotalcostYr6')->nullable();
            $table->text('Total')->nullable();
            $table->text('ExpenditureAccount');
            $table->text('GoK_Taxes');
            $table->text('GoK_Cash');
            $table->text('GoK_Inkind');
            $table->text('IFAD');
            $table->text('Ben');
            $table->text('BenCash');
            $table->text('PFI');
            $table->text('Heifer');
            $table->text('Financing_Rule');
            $table->text('RefCode1')->nullable();
            $table->text('Activity1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reference_codes');
    }
};
