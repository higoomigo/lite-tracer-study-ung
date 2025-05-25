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
        Schema::create('lanjut_studi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Assuming you're linking to the User model
            $table->string('plan_study'); // Yes/No
            $table->string('study_location')->nullable(); // Domestic or International
            $table->string('study_financed_by'); // Scholarship, Parent's Support, Self, Other
            $table->string('study_financed_by_other')->nullable(); // If 'Other' is chosen, specify source
            $table->string('study_scholarship')->nullable(); // Yes/No
            $table->string('scholarship_type')->nullable(); // If yes, specify scholarship type
            $table->string('scholarship_type_other')->nullable(); // If scholarship type is "Other"
            $table->string('university_name')->nullable(); // Name of the university
            $table->string('study_program')->nullable(); // The study program they joined
            $table->date('study_start_date')->nullable(); // The start date of the further studies
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lanjut_studis');
    }
};
