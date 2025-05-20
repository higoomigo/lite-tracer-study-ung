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
        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // Link to the user
            $table->enum('employed', ['yes', 'no'])->default('no'); // Whether they are currently employed
            $table->string('industry')->nullable(); // Industry the alumni works in (if employed)
            $table->enum('job_status', ['full_time', 'part_time', 'freelancer'])->nullable(); // Full-time, part-time, freelancer (if employed)
            $table->bigInteger('monthly_salary')->nullable(); // Monthly salary (if employed)
            $table->string('job_location')->nullable(); // Job location (if employed)
            $table->integer('waiting_time')->nullable(); // Waiting time after graduation (if employed)
            $table->string('job_choice_factor')->nullable(); // Factor influencing job choice (if employed)
            
            // Previous employment data (if ever employed)
            $table->enum('ever_employed', ['yes', 'no'])->default('no'); // Whether they have ever been employed
            $table->string('last_job_title')->nullable(); // Last job title (if ever employed)
            $table->string('last_company')->nullable(); // Last company (if ever employed)
            $table->enum('reason_left', ['personal', 'layoff', 'career_change', 'study', 'other'])->nullable(); // Reason for leaving (if ever employed)
            $table->string('current_activity')->nullable(); // Current activity (if unemployed)
            
            // If never employed
            $table->enum('never_employed_reason', ['no_opportunity', 'study', 'family', 'health', 'other'])->nullable(); // Reason for not having a job
            $table->enum('never_employed_looking', ['yes', 'no'])->nullable(); // Whether the alumni is looking for a job
            $table->enum('never_employed_business', ['yes', 'no', 'not_sure'])->nullable(); // Whether the alumni is considering starting a business
            $table->string('desired_industry')->nullable(); // Desired industry (if looking for a job)
            
            // General information
            $table->enum('has_business', ['yes', 'no'])->nullable(); // Whether they have a business
            $table->string('business_name')->nullable(); // Business name (if they have a business)
            $table->enum('interest_return_school', ['yes', 'no', 'considering'])->nullable(); // Interest in continuing education
            
            // Alumni's plan to continue study
            $table->enum('plan_study', ['yes', 'no', 'maybe'])->nullable(); // Whether they plan to continue studies
            
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaans');
    }
};
