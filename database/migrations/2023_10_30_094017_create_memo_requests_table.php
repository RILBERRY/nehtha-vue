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
        Schema::create('memo_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('memo_id')->constrained('memos');
            $table->foreignId('company_id')->constrained('companies');
            $table->string('request_no');
            $table->string('status')->default('pending');
            $table->json('medicines')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memo_requests');
    }
};
