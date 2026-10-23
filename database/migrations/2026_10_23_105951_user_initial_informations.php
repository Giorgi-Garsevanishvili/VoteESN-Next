<?php

use App\Enums\Role;
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
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname', 255)->after('name');
            $table->string('role')->default(Role::PENDING->value);
            $table->foreignId('section_id')->constrained('sections');
            $table->timestamp('last_login')->nullable();
            $table->boolean('terms_consent_accepted')->nullable()->default(null);
            $table->timestamp('terms_consent_at')->nullable();
            $table->string('terms_version', 255)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
