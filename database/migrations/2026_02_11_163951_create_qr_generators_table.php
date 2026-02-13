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
        Schema::create('qr_generators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained()->nullOnDelete();
            $table->string('token')->unique();
            $table->string('nama_qr');
            $table->longText('path_qr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_generators');
    }
};
