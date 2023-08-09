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
        Schema::create('main_activities', function (Blueprint $table) {
            $table->id();
            $table->string('AcNo', 512);
            $table->string('RefCode', 512);
            $table->string('Centre', 512);
            $table->string('Location', 512);
            $table->string('Officer', 512);
            $table->string('Q1', 512);
            $table->string('Q2', 512);
            $table->string('Q3', 512);
            $table->string('Q4', 512);
            $table->string('Cat', 512);
            $table->string('Donor', 512);
            $table->string('FY', 512);
            $table->string('Flag', 512);
            $table->string('Why_benefits', 512);
            $table->string('How_done', 512);
            $table->string('Ben_role', 512);
            $table->string('Ben_contribution', 512);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_activities');
    }
};
