<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\Wirausaha;
use App\Models\User;

class WirausahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::create('wirausaha', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('is_entrepreneur')->default(false); // Apakah alumni berwirausaha
        //     $table->string('business_type')->nullable(); // Jenis Usaha
        //     $table->string('business_name')->nullable(); // Nama Usaha
        //     $table->date('business_start')->nullable(); // Tanggal mulai usaha
        //     $table->text('business_reason')->nullable(); // Alasan memulai usaha
        //     $table->string('business_reason_other')->nullable(); // Lainnya alasan memulai usaha
        //     $table->string('business_funding')->nullable(); // Sumber dana untuk usaha
        //     $table->string('business_funding_other')->nullable(); // Lainnya sumber dana usaha
        //     $table->string('business_progress')->nullable(); // Perkembangan usaha
        //     $table->string('business_obstacle')->nullable(); // Kendala dalam usaha
        //     $table->string('business_obstacle_other')->nullable(); // Lainnya kendala usaha
        //     $table->string('entrepreneur_training')->nullable(); // Pelatihan kewirausahaan
        //     $table->string('entrepreneur_training_source')->nullable(); // Sumber pelatihan
        //     $table->text('business_plan')->nullable(); // Rencana pengembangan usaha
        //     $table->string('business_plan_other')->nullable(); // Rencana lainnya
        //     $table->string('business_support')->nullable(); // Dukungan atau bantuan yang dibutuhkan
        //     $table->string('business_support_type')->nullable(); // Jenis dukungan yang dibutuhkan
        //     $table->string('business_support_type_other')->nullable(); // Jenis dukungan lainnya
        //     $table->string('business_international')->nullable(); // Rencana usaha ke pasar internasional
        //     $table->string('business_goal')->nullable(); // Tujuan utama menjalankan usaha
        //     $table->string('business_goal_other')->nullable(); // Tujuan lainnya
        //     $table->string('has_employee')->default(false); // Apakah memiliki karyawan
        //     $table->integer('employee_count')->nullable(); // Jumlah karyawan
        //     $table->text('business_tips')->nullable(); // Tips atau saran bagi calon wirausahawan
        //     $table->unsignedBigInteger('user_id'); // Foreign Key to User table
        //     $table->timestamps();

        //     // Add foreign key constraint (assuming a user table exists)
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        // });

        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray(); // ambil semua id user

        foreach (range(1, 20) as $_) {
            $hasBusiness = $faker->boolean;
            Wirausaha::create([
                'is_entrepreneur' => $hasBusiness,
                'business_type' => $hasBusiness ? $faker->randomElement(['makanan_minuman', 'fashion', 'teknologi', 'pendidikan', 'kesehatan','jasa', 'pertanian','peternakan','perdagangan','kreatif','lainnya' ]) : null,
                'business_name' => $hasBusiness ? $faker->company : null,
                'business_start' => $hasBusiness ? $faker->date() : null,
                'business_reason' => $hasBusiness ? $faker->sentence : null,
                'business_reason_other' => null,
                'business_funding' => $hasBusiness ? $faker->randomElement(['personal', 'parents', 'loan', 'institution', 'other']) : null,
                'business_funding_other' => null,
                'business_progress' => $hasBusiness ? $faker->randomElement(['Berkembang', 'Stabil', 'Menurun']) : null,
                'business_obstacle' => $hasBusiness ? $faker->randomElement(['Modal', 'Pemasaran', 'SDM', 'Lainnya']) : null,
                'business_obstacle_other' => null,
                'entrepreneur_training' => $hasBusiness ? $faker->randomElement(['Pernah', 'Belum']) : null,
                'entrepreneur_training_source' => $hasBusiness ? $faker->company : null,
                'business_plan' => $hasBusiness ? $faker->sentence : null,
                'business_plan_other' => null,
                'business_support' => $hasBusiness ? $faker->randomElement(['Modal', 'Pelatihan', 'Pemasaran', 'Lainnya']) : null,
                'business_support_type' => $hasBusiness ? $faker->randomElement(['Dana', 'Mentoring', 'Networking', 'Lainnya']) : null,
                'business_support_type_other' => null,
                'business_international' => $hasBusiness ? $faker->randomElement(['Ya', 'Tidak']) : null,
                'business_goal' => $hasBusiness ? $faker->randomElement(['Mandiri', 'Membuka Lapangan Kerja', 'Lainnya']) : null,
                'business_goal_other' => null,
                'has_employee' => $hasBusiness ? $faker->randomElement(['yes', 'no']) : 'no',
                'employee_count' => $hasBusiness && 'has_employee' == 'yes' ? $faker->numberBetween(0, 20) : null,
                'business_tips' => $hasBusiness ? $faker->sentence : null,
                'user_id' => $faker->randomElement($userIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);    
        }
    }
}
