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
        Schema::create('revenu', function (Blueprint $table) {
            $table->id();
            $table->string('type_revenu');
            $table->unsignedInteger('montant_revenu');
            $table->date('date_revenu');
            $table->string('description_revenu');
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     */

     
    
    public function down(): void
    {
        
        Schema::dropIfExists('revenu');
    }
};
