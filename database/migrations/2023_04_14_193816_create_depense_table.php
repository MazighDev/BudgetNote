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
        Schema::create('depense', function (Blueprint $table) {
            $table->id();
            $table->string('type_depense');
            $table->unsignedInteger('montant_depense');
            $table->date('date_depense');
            $table->string('description_depense');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depense');
    }
};
