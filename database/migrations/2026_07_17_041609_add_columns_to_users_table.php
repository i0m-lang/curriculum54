<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('kana', 30)->nullable()->after('name');
            $table->string('phone')->nullable()->after('email');
            $table->string('postcode')->nullable()->after('phone');
            $table->string('prefecture')->nullable()->after('postcode');
            $table->string('city', 30)->nullable()->after('prefecture');
            $table->string('address', 50)->nullable()->after('city');
            $table->string('remarks', 255)->nullable()->after('address');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['kana', 'phone', 'postcode', 'prefecture', 'city', 'address', 'remarks']);
        });
    }
};
