<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('adv_name');
            $table->string('oab_number');
            $table->string('entrance');
            $table->string('exit')->nullable();
            $table->json('prisioner');
            $table->longText('observations')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('prisional_unit_id')->constrained('prisional_units')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
