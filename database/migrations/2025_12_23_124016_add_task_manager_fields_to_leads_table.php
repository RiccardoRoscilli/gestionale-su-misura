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
        Schema::table('leads', function (Blueprint $table) {
            // Add UTM and source tracking fields
            $table->string('source', 100)->nullable()->after('estimated_credits');
            $table->string('utm_source', 100)->nullable()->after('source');
            $table->string('utm_medium', 100)->nullable()->after('utm_source');
            $table->string('utm_campaign', 100)->nullable()->after('utm_medium');
            
            // Add task manager integration fields
            $table->unsignedBigInteger('task_manager_request_id')->nullable()->after('utm_campaign');
            $table->unsignedBigInteger('task_manager_customer_id')->nullable()->after('task_manager_request_id');
        });
        
        // Update status enum to include new values
        Schema::table('leads', function (Blueprint $table) {
            $table->enum('status', ['new', 'evaluating', 'quoted', 'accepted', 'rejected', 'ticket_created', 'ticket_failed'])
                  ->default('new')
                  ->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropColumn([
                'source', 
                'utm_source', 
                'utm_medium', 
                'utm_campaign',
                'task_manager_request_id', 
                'task_manager_customer_id'
            ]);
            
            // Revert status enum to original values
            $table->enum('status', ['new', 'evaluating', 'quoted', 'accepted', 'rejected'])
                  ->default('new')
                  ->change();
        });
    }
};