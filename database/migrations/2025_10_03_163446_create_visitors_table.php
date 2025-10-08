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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('visitor_id', length: 55)->unique();
            $table->string('ip', length: 16);
            $table->string('country', length: 35);
            $table->string('city', length: 35);
            $table->string('isp', length: 35);
            $table->float('lat');
            $table->float('lon');
            $table->boolean('cv_downloaded')->default(False);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
