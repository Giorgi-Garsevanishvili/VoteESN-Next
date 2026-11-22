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
        Schema::create('voter_tokens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('token_hash');
            $table->foreignId('election_id')->constrained('elections')->cascadeOnDelete();
            $table->string('qr_code_image')->nullable();
            $table->boolean('used')->default(false);
            $table->boolean('sent')->default(false);
            $table->foreignId('section_id')->constrained('sections')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voter_tokens');
    }
};
