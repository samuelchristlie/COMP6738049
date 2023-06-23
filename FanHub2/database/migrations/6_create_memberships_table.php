<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            // For MySQL, etc.
            $table->date('membershipEnd')->default(DB::raw("DATE_ADD(CURRENT_TIMESTAMP(0), INTERVAL 1 YEAR)"));
            // For SQLite
            // $table->date('membershipEnd')->default(DB::raw("(date('now', '+1 year'))"));
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
