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
        Schema::create('wirausaha', function (Blueprint $table) {
            $table->id();
            $table->string('is_entrepreneur')->default(false); // Apakah alumni berwirausaha
            $table->string('business_type')->nullable(); // Jenis Usaha
            $table->string('business_name')->nullable(); // Nama Usaha
            $table->date('business_start')->nullable(); // Tanggal mulai usaha
            $table->text('business_reason')->nullable(); // Alasan memulai usaha
            $table->string('business_reason_other')->nullable(); // Lainnya alasan memulai usaha
            $table->string('business_funding')->nullable(); // Sumber dana untuk usaha
            $table->string('business_funding_other')->nullable(); // Lainnya sumber dana usaha
            $table->string('business_progress')->nullable(); // Perkembangan usaha
            $table->string('business_obstacle')->nullable(); // Kendala dalam usaha
            $table->string('business_obstacle_other')->nullable(); // Lainnya kendala usaha
            $table->string('entrepreneur_training')->nullable(); // Pelatihan kewirausahaan
            $table->string('entrepreneur_training_source')->nullable(); // Sumber pelatihan
            $table->text('business_plan')->nullable(); // Rencana pengembangan usaha
            $table->string('business_plan_other')->nullable(); // Rencana lainnya
            $table->string('business_support')->nullable(); // Dukungan atau bantuan yang dibutuhkan
            $table->string('business_support_type')->nullable(); // Jenis dukungan yang dibutuhkan
            $table->string('business_support_type_other')->nullable(); // Jenis dukungan lainnya
            $table->string('business_international')->nullable(); // Rencana usaha ke pasar internasional
            $table->string('business_goal')->nullable(); // Tujuan utama menjalankan usaha
            $table->string('business_goal_other')->nullable(); // Tujuan lainnya
            $table->string('has_employee')->default(false); // Apakah memiliki karyawan
            $table->integer('employee_count')->nullable(); // Jumlah karyawan
            $table->text('business_tips')->nullable(); // Tips atau saran bagi calon wirausahawan
            $table->unsignedBigInteger('user_id'); // Foreign Key to User table
            $table->timestamps();

            // Add foreign key constraint (assuming a user table exists)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wirausahas');
    }
};
