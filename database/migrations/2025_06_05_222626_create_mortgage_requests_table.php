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
        Schema::create('mortgage_requests', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
              $table->foreignId('house_id')->constrained('houses')->cascadeOnDelete();
               $table->foreignId('interest_id')->constrained('interests')->cascadeOnDelete();
               $table->integer('duration');
               $table->integer('house_price');
               $table->string('bank_name');
               $table->integer('interest');
               $table->integer('dp_total_amount');
               $table->integer('dp_percentage');
               $table->integer('loan_total_amount');
               $table->integer('loan_interest_total_a_mount');
               $table->integer('monthly_amount');
               $table->string('status');
               $table->string('documents');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mortgage_requests');
    }
};
