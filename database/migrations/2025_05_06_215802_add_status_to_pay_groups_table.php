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
        Schema::table('pay_groups', function (Blueprint $table) {
            $table->boolean('status')->default(true);  // true = active, false = inactive
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pay_groups', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
