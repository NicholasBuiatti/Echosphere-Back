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
        Schema::create('social_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('nickname')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('email')->nullable();
            $table->string('number_phone', 20)->nullable();
            $table->string('password');
            $table->string('avatar_url')->nullable();
            $table->text('bio')->nullable();
            $table->enum('gender', ['male', 'female', 'non-binary', 'other'])->nullable();            
            $table->enum('status', ['active', 'suspended', 'banned'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_users');
    }
};
