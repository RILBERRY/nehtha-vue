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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('registration_no')->nullable();
            $table->foreignId('company_type_id')->constrained('company_types');
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->json('address');
            $table->string('contact')->nullable();
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
            $table->string('email');
            $table->boolean('is_active')->default(false);
            $table->boolean('accept_bulk_request')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
