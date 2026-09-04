<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('signups', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('kana', 30);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('postcode');
            $table->string('prefecture');
            $table->string('city', 30);
            $table->string('address', 50);
            $table->string('remarks', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('signups');
    }
};