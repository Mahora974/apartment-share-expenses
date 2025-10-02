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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('label')->nullable(false);
            $table->date('payment')->nullable(false);
            $table->boolean('divide')->nullable(false);
            $table->boolean('receipt')->nullable(false);
            $table->boolean('payed')->nullable(false);
            $table->float('amount')->nullable(false);
            $table->float('adjusted_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
