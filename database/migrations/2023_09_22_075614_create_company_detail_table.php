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
        Schema::create('company_detail', function (Blueprint $table) {
            // $table->bigIncrements('company_id');
            $table->string('company_name');
            $table->string('company_logo');
            $table->string('company_licence');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('status')->default('Not_verified');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_detail');
    }
};
