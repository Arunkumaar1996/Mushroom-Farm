<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\customerquery;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customerqueries', function (Blueprint $table) {
            $table->id();
            $table->string('customerName');
            $table->string('email');
            $table->bigInteger('contactNo');
            $table->string('websiteRating');
            $table->text('customerComment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customerqueries');
    }
};
