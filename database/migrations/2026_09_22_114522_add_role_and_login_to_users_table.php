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
        Schema::table('users', function (Blueprint $table) {
             $table->string('login')->unique()->after('id');
             $table->foreignId('role_id')
              ->nullable()
              ->after('email')
              ->constrained('roles')
              ->restrictOnDelete();
             $table->boolean('actif')->default(true)->after('role_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
        $table->dropColumn(['login', 'role_id', 'actif']);
        });
    }
};
