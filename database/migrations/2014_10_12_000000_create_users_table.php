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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40)->unique();
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("profile_image")->nullable()->default(null);
            $table->string("first_name", 50)->nullable()->default(null);
            $table->string("last_name", 50)->nullable()->default(null);
            $table->string("phone_number", 50)->nullable()->default(null);
            $table->string("country", 50)->nullable()->default(null);
            $table->string("nationality", 50)->nullable()->default(null);
            $table->string("city", 50)->nullable()->default(null);
            $table->string("address", 50)->nullable()->default(null);
            $table->boolean("privacy_hidden")->default(true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
