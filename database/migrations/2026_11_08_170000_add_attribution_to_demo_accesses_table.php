<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('demo_accesses', function (Blueprint $table) {
            $table->string('page', 100)->nullable()->after('demo_name');
            $table->string('utm_source', 100)->nullable()->after('page');
            $table->string('utm_medium', 100)->nullable()->after('utm_source');
            $table->string('utm_campaign', 100)->nullable()->after('utm_medium');
        });
    }

    public function down(): void
    {
        Schema::table('demo_accesses', function (Blueprint $table) {
            $table->dropColumn(['page', 'utm_source', 'utm_medium', 'utm_campaign']);
        });
    }
};
