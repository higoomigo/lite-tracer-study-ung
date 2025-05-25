<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Pekerjaan;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $table->id();
        //     $table->foreignId('user_id')->constrained('users'); // Link to the user
        //     $table->enum('employed', ['yes', 'no'])->default('no'); // Whether they are currently employed
        //     $table->string('industry')->nullable(); // Industry the alumni works in (if employed)
        //     $table->enum('job_status', ['full_time', 'part_time', 'freelancer'])->nullable(); // Full-time, part-time, freelancer (if employed)
        //     $table->bigInteger('monthly_salary')->nullable(); // Monthly salary (if employed)
        //     $table->string('job_location')->nullable(); // Job location (if employed)
        //     $table->integer('waiting_time')->nullable(); // Waiting time after graduation (if employed)
        //     $table->string('job_choice_factor')->nullable(); // Factor influencing job choice (if employed)
            
        //     // Previous employment data (if ever employed)
        //     $table->enum('ever_employed', ['yes', 'no'])->default('no'); // Whether they have ever been employed
        //     $table->string('last_job_title')->nullable(); // Last job title (if ever employed)
        //     $table->string('last_company')->nullable(); // Last company (if ever employed)
        //     $table->enum('reason_left', ['personal', 'layoff', 'career_change', 'study', 'other'])->nullable(); // Reason for leaving (if ever employed)
        //     $table->string('current_activity')->nullable(); // Current activity (if unemployed)
            
        //     // If never employed
        //     $table->enum('never_employed_reason', ['no_opportunity', 'study', 'family', 'health', 'other'])->nullable(); // Reason for not having a job
        //     $table->enum('never_employed_looking', ['yes', 'no'])->nullable(); // Whether the alumni is looking for a job
        //     $table->enum('never_employed_business', ['yes', 'no', 'not_sure'])->nullable(); // Whether the alumni is considering starting a business
        //     $table->string('desired_industry')->nullable(); // Desired industry (if looking for a job)
            
        //     // General information
        //     $table->enum('has_business', ['yes', 'no'])->nullable(); // Whether they have a business
        //     $table->string('business_name')->nullable(); // Business name (if they have a business)
        //     $table->enum('interest_return_school', ['yes', 'no', 'considering'])->nullable(); // Interest in continuing education
            
        //     // Alumni's plan to continue study
        //     $table->enum('plan_study', ['yes', 'no', 'maybe'])->nullable(); // Whether they plan to continue studies
            
        //     $table->timestamps();
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray(); // ambil semua id user

        foreach (range(1, 20) as $index) {
            $isEmployed = $faker->boolean;
            $everEmployed = $faker->boolean;
            $neverEmployedReason = $faker->randomElement(['no_opportunity', 'study', 'family', 'health', 'other']);
            $neverEmployedLooking = $faker->randomElement(['yes', 'no']);
            $neverEmployedBusiness = $faker->randomElement(['yes', 'no', 'not_sure']);
            $hasBusiness = $faker->randomElement(['yes', 'no']);
            $interestReturnSchool = $faker->randomElement(['yes', 'no', 'considering']);
            $planStudy = $faker->randomElement(['yes', 'no', 'maybe']);

            Pekerjaan::create([
            'user_id' => $faker->randomElement($userIds),
            'employed' => $isEmployed ? 'yes' : 'no',
            'industry' => $isEmployed ? $faker->word : null,
            'job_status' => $isEmployed ? $faker->randomElement(['full_time', 'part_time', 'freelancer']) : null,
            'monthly_salary' => $isEmployed ? $faker->numberBetween(3000000, 10000000) : null,
            'job_location' => $isEmployed ? $faker->randomElement(['Dalam Provinsi Gorontalo', 'Luar Provinsi Gorontalo', 'Luar Negeri']) : null,
            'waiting_time' => $isEmployed ? $faker->numberBetween(0, 24) : null,
            'job_choice_factor' => $isEmployed ? $faker->sentence : null,

            'ever_employed' => $everEmployed ? 'yes' : 'no',
            'last_job_title' => $everEmployed ? $faker->jobTitle : null,
            'last_company' => $everEmployed ? $faker->company : null,
            'reason_left' => $everEmployed ? $faker->randomElement(['personal', 'layoff', 'career_change', 'study', 'other']) : null,
            'current_activity' => (!$isEmployed && !$everEmployed) ? $faker->sentence : null,

            'never_employed_reason' => (!$isEmployed && !$everEmployed) ? $neverEmployedReason : null,
            'never_employed_looking' => (!$isEmployed && !$everEmployed) ? $neverEmployedLooking : null,
            'never_employed_business' => (!$isEmployed && !$everEmployed) ? $neverEmployedBusiness : null,
            'desired_industry' => (!$isEmployed && !$everEmployed && $neverEmployedLooking === 'yes') ? $faker->word : null,

            'has_business' => $hasBusiness,
            'business_name' => $hasBusiness === 'yes' ? $faker->company : null,
            'interest_return_school' => $interestReturnSchool,
            'plan_study' => $planStudy,

            'created_at' => now(),
            'updated_at' => now(),
            ]);
        }
    }
}
