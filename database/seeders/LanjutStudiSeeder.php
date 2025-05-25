<?php

namespace Database\Seeders;

use App\Models\LanjutStudi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class LanjutStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::create('lanjut_studi', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Assuming you're linking to the User model
        //     $table->string('plan_study'); // Yes/No
        //     $table->string('study_location'); // Domestic or International
        //     $table->string('study_financed_by'); // Scholarship, Parent's Support, Self, Other
        //     $table->string('study_financed_by_other')->nullable(); // If 'Other' is chosen, specify source
        //     $table->string('study_scholarship'); // Yes/No
        //     $table->string('scholarship_type')->nullable(); // If yes, specify scholarship type
        //     $table->string('scholarship_type_other')->nullable(); // If scholarship type is "Other"
        //     $table->string('university_name'); // Name of the university
        //     $table->string('study_program'); // The study program they joined
        //     $table->date('study_start_date'); // The start date of the further studies
        //     $table->timestamps();
        // });

        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray(); // ambil semua id user

    foreach (range(1, 20) as $index) {
        $planStudy = $faker->randomElement(['yes', 'no']);
        $studyLocation = $planStudy === 'yes' ? $faker->randomElement(['domestic', 'international']) : null;
        $studyFinancedBy = $faker->randomElement(['scholarship', 'parents', 'self', 'other']);
        $studyFinancedByOther = $studyFinancedBy === 'other' ? $faker->sentence(2) : null;
        $studyScholarship = $planStudy === 'yes' ? $faker->randomElement(['yes', 'no']) : null;
        if ($planStudy === 'yes' && $studyScholarship === 'yes') {
        $scholarshipType = $faker->randomElement(['merit', 'need', 'government', 'private', 'other']);
        $scholarshipTypeOther = $scholarshipType === 'other' ? $faker->sentence(2) : null;
        } else {
        $scholarshipType = null;
        $scholarshipTypeOther = null;
        }
        $universityName = $planStudy === 'yes' ? $faker->company : null;
        $studyProgram = $planStudy === 'yes' ? $faker->jobTitle : null;
        $studyStartDate = $planStudy === 'yes' ? $faker->date() : null;

        LanjutStudi::create([
        'user_id' => $faker->randomElement($userIds),
        'plan_study' => $planStudy,
        'study_location' => $studyLocation,
        'study_financed_by' => $studyFinancedBy,
        'study_financed_by_other' => $studyFinancedByOther,
        'study_scholarship' => $studyScholarship,
        'scholarship_type' => $scholarshipType,
        'scholarship_type_other' => $scholarshipTypeOther,
        'university_name' => $universityName,
        'study_program' => $studyProgram,
        'study_start_date' => $studyStartDate,
        'created_at' => now(),
        'updated_at' => now(),
        ]);
    }
    }
}
